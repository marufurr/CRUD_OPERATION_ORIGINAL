<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function AllContact(){
    	$con=DB::table('contacts')->get();
      return view('pages.allcontact')->with('datas',$con);
    }
    public function InsertData(){
    	return view('pages.insert');
    }

    public function DataAdded(Request $request){
      $data=array();
      $data['name']=$request->name;  
      $data['email']=$request->email;
      $data['phone']=$request->phone;
      $data['description']=$request->description;  
      $insert=DB::table('contacts')->insert($data);
      return Redirect()->route('all.contacts');

    }
    public function Delete($id){
       $delete =DB::table('contacts')->where('id',$id)->delete();
       return Redirect()->route('all.contacts');

    }
    public function Edit($id){
      $edit=DB::table('contacts')->where('id',$id)->first();
      return view('pages.editcontact',compact('edit'));
    }

    public function Update(Request $request,$id){
      $data=array();
      $data['name']=$request->name;
      $data['email']=$request->email;
      $data['phone']=$request->phone;
      $data['description']=$request->description;
      $update=DB::table('contacts')->where('id',$id)->update($data);
      return Redirect()->route('all.contacts');
    }
    public function View($id){
      $view=DB::table('contacts')->where('id',$id)->first();
      return view('pages.viewcontact',compact('view'));
   
    }
}



