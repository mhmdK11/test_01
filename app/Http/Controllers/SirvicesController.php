<?php

namespace App\Http\Controllers;
use App\Models\sirvices;
use Illuminate\Http\Request;

class SirvicesController extends Controller
{
    public function homedata(Request $request){

        $image = 'img_'.uniqid().'.'.$request->img->extension();
        $request->img->move(public_path('img'),$image );

        $ser = sirvices::create([

            'title' => $request->tit,
            'img' => "img/$image",
            'description' => $request->des,

        ]);

        $ser->save();

    }


    public function homeview() {

        $ser = sirvices::all();
        return view('home', compact('ser'));
    }

    public function homecontrrol($id) {

        $ser = sirvices::findorFail($id);
        return view('homecontrrol', compact('ser'));
    }

    public function update(Request $request,$id) {

        $image = 'img_'.uniqid().'.'.$request->img->extension();
        $request->img->move(public_path('img'),$image );

        $ser = sirvices::findorFail($id);

            $ser->title = $request->tit;
            $ser->img = "img/$image";
            $ser->description = $request->des;

            $ser->save();
    }


}
