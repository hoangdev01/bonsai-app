<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
  public function index()
  {
      return view('application');
  }
  public function test(){
    $tree = Tree::findOrFail(1);
    return response()->json($tree);
  }
  public function getCsrf(){
      return csrf_token(); 
  }
}
