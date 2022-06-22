<?php

namespace App\Http\Controllers;

use App\Models\Catechumen;
use Illuminate\Http\Request;

class CatechumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $catechumens=Catechumen::all();
        //
        return view('admin.catechumens.index',compact('catechumens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catechumens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catechumen=new Catechumen();
        $catechumen->name=$request->name;
        $catechumen->surname=$request->surname;
        $catechumen->ci=$request->ci;
        $catechumen->birth=$request->birth;

        $catechumen->save();

        return redirect()->route('catechumens.show',compact('catechumen'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Catechumen $catechumen)
    {
        return view('admin.catechumens.show',compact('catechumen'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Catechumen $catechumen)
    {
        return view('admin.catechumens.edit',compact('catechumen'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Catechumen $catechumen)
    {
        $catechumen->name=$request->name;
        $catechumen->surname=$request->surname;
        $catechumen->ci=$request->ci;
        $catechumen->birth=$request->birth;

        $catechumen->save();

        return redirect()->route('catechumens.show',compact('catechumen'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catechumen $catechumen)
    {
        $catechumen->delete();
        return redirect()->route('catechumens.index');
    }
}
