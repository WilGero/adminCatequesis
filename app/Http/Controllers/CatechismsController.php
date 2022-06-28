<?php

namespace App\Http\Controllers;

use App\Models\Catechism;
use App\Models\Catechumen;
use Database\Factories\CatechumenFactory;
use Illuminate\Http\Request;

class CatechismsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $catechisms=Catechism::where('title','LIKE','%'.$texto.'%')
                    ->orwhere('id','LIKE','%'.$texto.'%')
                    ->orderBy('id','asc')->paginate(6);
         return view('admin.catechisms.index',compact('catechisms','texto'));
    }

    public function asistencias(Request $request,Catechism $catechism){
       $texto=trim($request->get('texto'));
        $catechumens=Catechumen::where('surname','LIKE','%'.$texto.'%')
                    ->orwhere('ci','LIKE','%'.$texto.'%')
                    ->orderBy('surname','asc')->paginate(6);
           
        return view('admin.catechisms.asistencia',compact('catechism','catechumens','texto'));
        // $id1=$catechism->find(1);
        // 
       // return view('admin.catechisms.show',compact('catechism'));
        //return view('admin.catechisms.show');
        // $id2=$catechumen->find(1);
        // while ($id2 <= 4) {
        //  
        //     $id1+=1;
        //     $id2+=1;
        // }
    }
    
    public function refrescar(){
        $catechisms=Catechism::all();
        $catechumens=Catechumen::all();
        foreach($catechumens as $catechumen)
            foreach($catechisms as $catechism)
                $catechism->find($catechism->id)->catechumens()->detach($catechumen->id);
                return $catechumen;
    }

    public function registrarAsistencia(Request $request,Catechumen $catechumen,$catechism){
        $catechisms=new Catechism();
        $catechisms=Catechism::find($catechism);
        $catechumens=Catechumen::all();
        //foreach($catechisms as $catechism)
            foreach($catechumens as $catechumen)
                $catechisms->find($catechisms->id)->catechumens()->attach($catechumen->id);
                $catechisms->asistencia=$request->asistencia;
        return $catechism;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catechisms.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catechism=new Catechism();
        $catechism->id=$request->id;
        $catechism->title=$request->title;
        $catechism->date=$request->date;
        $catechism->save();

        return redirect()->route('catechisms.show',compact('catechism'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Catechumen $catechumen,Catechism $catechism)
    {
        $texto=trim($request->get('texto'));
        $catechumens=Catechumen::where('surname','LIKE','%'.$texto.'%')
                    ->orwhere('ci','LIKE','%'.$texto.'%')
                    ->orderBy('surname','asc')->paginate(6);
        return view('admin.catechisms.show',compact('catechism','catechumens','texto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Catechism $catechism)
    {
        return view('admin.catechisms.edit',compact('catechism'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Catechism $catechism)
    {
        //
        $catechism->id=$request->id;
        $catechism->title=$request->title;

        $catechism->save();

        return redirect()->route('catechisms.show',compact('catechism'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catechism $catechism)
    {
        $catechism->delete();
        return redirect()->route('catechisms.index');
    }
}
