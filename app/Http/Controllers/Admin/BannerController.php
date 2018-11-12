<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    //Banner管理
    public function index()
    {

        return view('admin.banner.index');
    }
}
