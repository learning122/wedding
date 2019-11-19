<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Create;
use DB;

class HallController extends Controller
{

    public function index()
    {
        $loc_data = Create::all();
        return view('index')->with('loc_data',$loc_data);
    }

    public function create()
    {
        return view('create');
    }

    public function insert(Request $request)
    {
        $this->validate($request,[
            'hall'=>'required',
            'city'=>'required',
            'town'=>'required',
            'capacity'=>'required',
            'price'=>'required',
            'desc'=>'required',
        ]);
        $hall = new Create;
        $hall->hall = $request->input('hall');
        $hall->city = $request->input('city');
        $hall->town = $request->input('town');
        $hall->capacity = $request->input('capacity');
        $hall->price = $request->input('price');
        $hall->desc = $request->input('desc');
        $hall->save();

        return redirect('/')->with('success','Post Created');
    }
    public function town($id)
    {
        $create = Create::findOrFail($id);
        $towns = Create::where('city', $create->city)->pluck('town','id')->unique();
        return view('towns')->with('towns',$towns)->with('city',$create);
    }
    public function hall($id)
    {
        $count = 1;
        $hall_info = Create::find($id);
        $hall_info = Create::where('town', $hall_info->town)->get();
        return view('hall_info')->with('hall_info',$hall_info)->with('count',$count)->with('id',$id);
    }

}