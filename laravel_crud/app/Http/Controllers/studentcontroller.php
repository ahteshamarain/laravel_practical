<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stdmodel;


class studentcontroller extends Controller
{
   public function form(){
return view('form');
   }

    public function formdata(Request $request){
        // print_r($request->all());
        $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required',
           'class' => 'required',
           'faculty' => 'required',

           
        ]);
        $std_tbl = new stdmodel();
        $std_tbl ->name = $request['name'];
        $std_tbl ->email = $request['email'];
        $std_tbl ->password = $request['password'];
        $std_tbl ->class = $request['class'];
        $std_tbl ->faculty = $request['faculty'];

        $std_tbl ->save();

        return redirect('userdata');
    }

    public function user_view(){
        $data = stdmodel::all(); 
        return view('userdata')->with(compact('data'));
    }

    
    public function del_user($id){
        $del_record = stdmodel::find($id); 
        if(!is_null($del_record)){
            $del_record->delete();
            return redirect('userdata');
        }
        else{
        return redirect('userdata');
        }
     
    }
}
