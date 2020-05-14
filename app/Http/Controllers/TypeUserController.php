<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeUser;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $test = TypeUser::all();
       //$test = TypeCustomers::select("*")->get();
        //$test = DB::select("select * from type_customers");
        return view("TypeUsers.index",["test" => $test]);
    }
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('TypeUsers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $options=[
        'name'=>$request->name  
        ];
        if(TypeUser::create($options)){
            return redirect('/TypeUsers');
        }else{
            return view ('TypeUsers.create');
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
        //
        $Type = TypeUser::find($id);
        //dd($data);
        return view("TypeUsers.edit",["Type" => $Type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
          $Type = TypeUser::find($request->id);
        $Type->name= $request->name;
        if($Type->save()){
            return redirect ('/TypeUsers');
        } else{
            return view("TypeUsers.edit",["Type" => $Type]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Type = TypeUser::destroy($request->id);
        //TypeCustomers::destroy($request);
        return redirect('/TypeUsers');
        //
    }
}
