<?php

namespace App\Http\Controllers;

use App\Post;
use App\submission;
use App\assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator,Redirect,Response;

class AssgController extends Controller
{
    public function viewAssg() {
        $details = DB::table('assignments')->get();
        return view('assignment', ['details'=>$details]);
      }

      public function subStore(Request $request) {
        
        $check = DB::table('submissions')->where('assg_id', ($request->id))-> value('assg_id');

        if(!($check == ($request->id))) {
          $details = assignment::find($request->id);
          return view('submission', compact('details'));
        }
        $details = assignment::find($request->id);
        return view('editSubmission', compact('details'));
        
      }
      
      public function editSubmission() {
      
        return view('editSubmission');
      }

      public function try(){
        return view('try');
      }

      public function edit(Request $request) {
        $check = DB::table('submissions')->where('assg_id', ($request->id))-> value('id');
        //$submission = submission::find($request->id);
        if(($file = $request->file('file'))) {
          $name = $file-> getClientOriginalName();

          if($file->move('files', $name)) {

            $post = submission::find($check);
            $post->fileName = $name;
            $post->assg_id = ($request->id);
            $post->save(); 
            return Redirect::to("assignment")->with('success', 'Updated file successfully!');
          };
        }
        return redirect()->back()->with('warning', 'No file found. Please upload a file.');
      }
      


      public function store(Request $request) {

        $details = assignment::find($request->id);
       
        if(($file = $request->file('file'))) {
          $name = $file-> getClientOriginalName();

          if($file->move('files', $name)) {

            $post = new submission(); 
            $post->fileName = $name;
            $post->assg_id = ($request->id);
            $post->save(); 
            return view('editSubmission', compact('details'))->with('success', 'File uploaded successfully!');
          };
        }
        return redirect()->back()->with('warning', 'No file found. Please upload a file.');
      }
}
