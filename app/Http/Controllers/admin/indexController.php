<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function __construnct(){
        $this->middleware(['auth']);
    }
    public function index(){
        return view('web.admin.index');
    }
}
