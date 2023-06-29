<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product()
    {
        if (session()->get('admin_id')) {
            return view('cms.product.add');
        } else {
            return redirect("/cms");
        }
    }

    public function list_product()
    {
        if (session()->get('admin_id')) {
            return view('cms.product.list');
        } else {
            return redirect("/cms");
        }
    }
}
