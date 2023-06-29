<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function add_category()
    {
        if (session()->get('admin_id')) {
            return view('cms.category.add');
        } else {
            return redirect("/cms");
        }
    }

    public function list_category()
    {
        if (session()->get('admin_id')) {
            return view('cms.category.list');
        } else {
            return redirect("/cms");
        }
    }

    public function store_category(Request $request)
    {
        if (session()->get('admin_id')) {
            $request->validate([
                'category' => 'required',
                'slug' => 'required',
            ]);
            try {
                DB::beginTransaction();
                Category::create([
                    'category' => $request->category,
                    'slug' => $request->slug,
                    'date' => date('Y-m-d'),
                    'status' => 1,
                    'created_by' => 'admin'
                ]);
                $last_id = DB::getPdo()->lastInsertId();
                $code = md5($last_id);
                DB::table('Categories')->where('category_id', '=', $last_id)->update(
                    [
                        'code' => $code
                    ]
                );
                DB::commit();
                return response()->json(['status' => 'true', 'msg' => 'Category Added Succeffully']);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 'false', 'msg' => 'Category Could not Added']);
            }
        } else {
            return redirect('/cms');
        }
    }

    public function get_category()
    {
        if (session()->get('admin_id')) {
            try {
                $categories = DB::table("categories")->orderBy('category_id', 'DESC')->get();
                return view('cms.category.response', ['categories' => $categories]);
            } catch (Exception $e) {
                return response()->json(['status' => 'false', 'msg' => 'Categories Could Not Found']);
            }
        } else {
            return redirect('/cms');
        }
    }

    public function edit_category($code)
    {
        if (session()->get('admin_id')) {
            try {
                $category = Category::where('code', '=', $code)->first();
                return view('cms.category.edit', ['category' => $category]);
            } catch (Exception $e) {
                return response()->json(['status' => 'false', 'msg' => 'Owner Could Not Found']);
            }
        } else {
            return redirect('/');
        }
    }

    public function update_category(Request $request)
    {
        if (session()->get('admin_id')) {
            try {
                DB::beginTransaction();
                DB::table('categories')->where('code', $request->code)->update([
                    'category' => $request->category,
                    'slug' => $request->slug,
                ]);
                DB::commit();
                return response()->json(['status' => 'true', 'msg' => 'Category Updated Successfully']);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 'false', 'msg' => 'Category Could not Updated Successfully']);
            }
        } else {
            return redirect('/');
        }
    }

    public function delete_category(Request $request)
    {
        if (session()->get('admin_id')) {
            try {
                DB::beginTransaction();
                $category = DB::table('categories')->where('code', $request->code)->first();
                if (!is_null($category)) {
                    DB::table('categories')->where('code', $request->code)->delete();
                    DB::commit();
                    return response()->json(['status' => 'true', 'msg' => 'Category Delete Successfully']);
                } else {
                    return response()->json(['status' => 'false', 'msg' => 'Category Could Not Deleted Successfully']);
                }
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 'false', 'msg' => 'Owner Could Not Delete']);
            }
        } else {
            return redirect('/');
        }
    }
}
