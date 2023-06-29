<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function add_sub_category()
    {
        if (session()->get('admin_id')) {
            $categories = Category::all();
            return view('cms.sub-category.add',  ['categories' => $categories]);
        } else {
            return redirect("/cms");
        }
    }

    public function store_sub_category(Request $request)
    {
        if (session()->get('admin_id')) {
            $request->validate([
                'category_id' => 'required',
                'sub_category' => 'required',
                'sub_slug' => 'required',
            ]);
            try {
                DB::beginTransaction();
                SubCategory::create([
                    'category_id' => $request->category_id,
                    'sub_category' => $request->sub_category,
                    'sub_slug' => $request->sub_slug,
                    'date' => date('Y-m-d'),
                    'status' => 1,
                ]);
                $last_id = DB::getPdo()->lastInsertId();
                $code = md5($last_id);
                DB::table('sub_categories')->where('sub_category_id', '=', $last_id)->update(
                    [
                        'code' => $code
                    ]
                );
                DB::commit();
                return response()->json(['status' => 'true', 'msg' => 'Sub Category Added Succeffully']);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 'false', 'msg' => 'Sub Category Could not Added']);
            }
        } else {
            return redirect('/cms');
        }
    }

    public function list_sub_category()
    {
        if (session()->get('admin_id')) {
            return view('cms.sub-category.list');
        } else {
            return redirect("/cms");
        }
    }

    public function get_sub_category()
    {
        if (session()->get('admin_id')) {
            try {
                $sub_categories = DB::table('sub_categories')
                    ->join('categories', 'sub_categories.category_id', '=', 'categories.category_id')->select('categories.*', 'sub_categories.*')->get();
                return view('cms.sub-category.response', ['sub_categories' => $sub_categories]);
            } catch (Exception $e) {
                return response()->json(['status' => 'false', 'msg' => 'Sub Category Could Not Found']);
            }
        } else {
            return redirect('/cms');
        }
    }

    public function edit_sub_category($code)
    {
        if (session()->get('admin_id')) {
            try {
                $categories = Category::all();
                $subCategory = SubCategory::where('code', '=', $code)->first();
                return view('cms.sub-category.edit', ['categories' => $categories, 'subCategory' => $subCategory]);
            } catch (Exception $e) {
                return response()->json(['status' => 'false', 'msg' => 'Sub Category Could Not Found']);
            }
        } else {
            return redirect('/');
        }
    }

    public function update_sub_category(Request $request)
    {
        if (session()->get('admin_id')) {
            try {
                DB::beginTransaction();
                DB::table('sub_categories')->where('code', $request->code)->update([
                    'category_id' => $request->category_id,
                    'sub_category' => $request->sub_category,
                    'sub_slug' => $request->sub_slug,
                ]);
                DB::commit();
                return response()->json(['status' => 'true', 'msg' => 'Sub Category Updated Successfully']);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 'false', 'msg' => 'Sub Category Could not Updated Successfully']);
            }
        } else {
            return redirect('/');
        }
    }

    public function delete_sub_category(Request $request)
    {
        if (session()->get('admin_id')) {
            try {
                DB::beginTransaction();
                $category = DB::table('sub_categories')->where('code', $request->code)->first();
                if (!is_null($category)) {
                    DB::table('sub_categories')->where('code', $request->code)->delete();
                    DB::commit();
                    return response()->json(['status' => 'true', 'msg' => 'Sub Category Delete Successfully']);
                } else {
                    return response()->json(['status' => 'false', 'msg' => 'Sub Category Could Not Deleted Successfully']);
                }
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 'false', 'msg' => 'Sub Category Could Not Delete']);
            }
        } else {
            return redirect('/');
        }
    }
}
