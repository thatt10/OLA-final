<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function grade(){
        return view('grade');
      }


    public function monthly1(){
      $data = DB::table('grade_stud')->where('exam_type', 'ME1')->get();
      return view('monthly1', ['data'=>$data]);
    }

   
  
}
