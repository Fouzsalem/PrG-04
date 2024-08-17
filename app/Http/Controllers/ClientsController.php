<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

class ClientsController extends Controller
{
    public function insert(Request $request){

      $imagge='image_'.uniqid().'.'.$request->imi->extension();
      $request->imi->move(public_path('image'),$imagge);

    $cli = clients::create([
    'name'=>$request->ti,
    'image'=>"image/$imagge",
    'about'=>$request->ab,

                   ]);
    $cli->save(); 

     }


    public function view(){

        $cli = clients::all();

        return view('view',compact('cli'));

    }



    public function edit($id){

        $cli = clients::findorFail($id);
 
        return view('edit',compact('cli'));

    }

    public function update(Request $request,$id){

         $imagge='image_'.uniqid().'.'.$request->imi->extension();
      $request->imi->move(public_path('image'),$imagge);


        $cli = clients::findorFail($id);
 
        $cli->update([

         'name'=>$request->ti,
         'image'=>"image/$imagge",
         'about'=>$request->ab,

        ]);


        return redirect('/view');
    }


     public function del ($id){

        clients::findorFail($id)->delete();

         return redirect('/view');


    }

}