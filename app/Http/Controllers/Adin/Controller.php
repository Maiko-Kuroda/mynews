<?php

namespace App\Http\Controllers\Adin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Controller extends Controller
{
    //追記
    public function add()
    {
        return view('admin.news.create')
    }
}
