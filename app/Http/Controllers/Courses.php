<?php

namespace App\Http\Controllers;

use App\Course;
use Ramsey\Uuid\Uuid;
use Session;
use Illuminate\Http\Request;

class Courses extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::get();
        return view("component.course.course", compact("course"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("component.course.create-course");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $req = request()->validate([
            'title' => 'required|min:3',
            'duration' => 'required',
            'price' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       $files = request()->file("banner");
       if ($files){
           $path = public_path("/images/");
           $profileImage = Uuid::uuid4()->getHex().time() . "." . $files->getClientOriginalExtension();
           $files->move($path, $profileImage);
           $req["banner"] = $profileImage;
            //    add to DB
           Course::create($req);
           Session::flash('sukses', "Success, Course Added Thanks for  Your Contributtion");
           return back();
        }else{
            Session::flash("gagal", "Sorry, Please Try Again");
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
