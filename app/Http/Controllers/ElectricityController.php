<?php

namespace App\Http\Controllers;

use App\Models\Electricity;
use Illuminate\Http\Request;

class ElectricityController extends Controller
{
//    public function create()
//    {
//
//        return view('create');
//    }
//
//    public function store(Request $request)
//    {
//$electricity=Electricity::create($request->all());
//return redirect ('Index');
//
//    }
//
//    public function Index()
//    {
//
//        $data=Electricity::all();
//        return view('Index',compact('data'));
//    }
//
//public function edit($id)
//    {
//       $data=Electricity::find($id);
//       return view ('edit', compact('data'));
//    }
//    public function update(Request $request , Electricity $electricity)
//    {
//        $electricity->update($request->all());
//        return redirect('Index');
//
//    }
//    public function delete(Electricity $electricity)
//
//    {
//        $electricity->delete();
//       return redirect('Index');
//    }


//public function create()
//{
//    return view('create');
//}
//    public function store(Request $request)
//    {
//     $electricity=Electricity::create($request->all());
//     return redirect('Index');
//    }
//    public function Index()
//    {
//        $data=Electricity::all();
//        return view('Index',compact('data'));
//
//    }
//    public function edit($id)
//    {
//        $data=Electricity::find($id);
//        return view('edit',);
//
//    }
//    public function update(Request $request , Electricity $electricity)
//    {
//        $electricity->update($request->all());
//        return redirect('Index');
//
//    }
//    public function delete(Electricity $electricity)
//    {
//      $electricity->delete();
//        return redirect('Index');
//
//    }

public function create()
{
    return view('create');

}
    public function store(Request $request)
    {
     $electricity=Electricity::create($request->all());
      return redirect('Index');
    }
public function Index()
{
    $data=Electricity::all();
    return view('Index',compact('data'));

}
    public function edit($id)
    {
        $electricity=Electricity::find($id);
        return view('edit',compact('electricity'));

    }
    public function update(Request $request , Electricity $electricity)
    {

      $electricity->update($request->all());
      return redirect('Index');

    }
    public function delete(Electricity $electricity)
    {
       $electricity->delete();
       return redirect('Index');

    }
}
