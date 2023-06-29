<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function add_brand()
    {
        if (session()->get('admin_id')) {
            return view('cms.brands.add');
        } else {
            return redirect("/cms");
        }
    }

    public function list_brand()
    {
        if (session()->get('admin_id')) {
            return view('cms.brands.list');
        } else {
            return redirect("/cms");
        }
    }

    public function store_brand(Request $request)
    {
        if (session()->get('admin_id')) {
            $request->validate([
                'brand' => 'required',
                'slug' => 'required',
            ]);
            try {
                DB::beginTransaction();
                Brand::create([
                    'brand' => $request->brand,
                    'slug' => $request->slug,
                    'date' => date('Y-m-d'),
                    'status' => 1,
                ]);
                $last_id = DB::getPdo()->lastInsertId();
                $code = md5($last_id);
                DB::table('brands')->where('brand_id', '=', $last_id)->update(
                    [
                        'code' => $code
                    ]
                );
                DB::commit();
                return response()->json(['status' => 'true', 'msg' => 'Brand Added Succeffully']);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 'false', 'msg' => 'Category Could not Added']);
            }
        } else {
            return redirect('/cms');
        }
    }

    public function get_brand()
    {
        if (session()->get('admin_id')) {
            try {
                $brands = DB::table("brands")->orderBy('brand_id', 'DESC')->get();
                return view('cms.brand.response', ['brands' => $brands]);
            } catch (Exception $e) {
                return response()->json(['status' => 'false', 'msg' => 'Brands Could Not Found']);
            }
        } else {
            return redirect('/cms');
        }
    }

    // public function edit_category($code)
    // {
    //     if (session()->get('admin_id')) {
    //         try {
    //             $category = Category::where('code', '=', $code)->first();
    //             return view('cms.category.edit', ['category' => $category]);
    //         } catch (Exception $e) {
    //             return response()->json(['status' => 'false', 'msg' => 'Owner Could Not Found']);
    //         }
    //     } else {
    //         return redirect('/');
    //     }
    // }

    // public function update_category(Request $request)
    // {
    //     if (session()->get('admin_id')) {
    //         try {
    //             DB::beginTransaction();
    //             DB::table('categories')->where('code', $request->code)->update([
    //                 'category' => $request->category,
    //                 'slug' => $request->slug,
    //             ]);
    //             DB::commit();
    //             return response()->json(['status' => 'true', 'msg' => 'Category Updated Successfully']);
    //         } catch (Exception $e) {
    //             DB::rollBack();
    //             return response()->json(['status' => 'false', 'msg' => 'Category Could not Updated Successfully']);
    //         }
    //     } else {
    //         return redirect('/');
    //     }
    // }

    // public function delete_category(Request $request)
    // {
    //     if (session()->get('admin_id')) {
    //         try {
    //             DB::beginTransaction();
    //             $category = DB::table('categories')->where('code', $request->code)->first();
    //             if (!is_null($category)) {
    //                 DB::table('categories')->where('code', $request->code)->delete();
    //                 DB::commit();
    //                 return response()->json(['status' => 'true', 'msg' => 'Category Delete Successfully']);
    //             } else {
    //                 return response()->json(['status' => 'false', 'msg' => 'Category Could Not Deleted Successfully']);
    //             }
    //         } catch (Exception $e) {
    //             DB::rollBack();
    //             return response()->json(['status' => 'false', 'msg' => 'Owner Could Not Delete']);
    //         }
    //     } else {
    //         return redirect('/');
    //     }
    // }
}
