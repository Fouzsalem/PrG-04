<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
class ServicesController extends Controller
{

public function insert2(Request $request){

    $imagge='image_'.uniqid().'.'.$request->immi->extension();
    $request->immi->move(public_path('image'),$imagge);

    $ser = services::create([
    'Title'=>$request->title,
    'image'=>"image/$imagge",
    'about'=>$request->abb,

                   ]);
    $ser->save(); 

     }


    public function view2 (){

        $ser = services::all();

        return view('view2',compact('ser'));

    }



    public function edit2 ($id){

        $ser = services::findorFail($id);
 
        return view('edit2',compact('ser'));

    }

    public function update2 (Request $request,$id){

         $imagge='image_'.uniqid().'.'.$request->immi->extension();
      $request->immi->move(public_path('image'),$imagge);


        $ser = services::findorFail($id);
 
        $ser->update([
 
         'Title'=>$request->title,
         'image'=>"image/$imagge",
         'about'=>$request->abb,

        ]);


        return redirect('/view2');
    }



     public function del2 ($id){

        services::findorFail($id)->delete();
        
         return redirect('/view2');


    }










}
