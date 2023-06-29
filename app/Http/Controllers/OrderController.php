<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list_order()
    {
        if (session()->get('admin_id')) {
            return view('cms.order.list');
        } else {
            return redirect("/cms");
        }
    }
}
