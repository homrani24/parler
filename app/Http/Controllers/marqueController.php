<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\marque;
use Illuminate\Support\Facades\Input;



class marqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // session set
        session(['user_id' => 5]);
        // session get
        dd(session('store_id'));
        $marque=DB::table('marques')->get();
       // dd($marque);
       return view('affiche_marque', ['marques' =>$marque]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    return view('ajout_voiture');

        //
    // dd($request);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    if(Input::hasFile('file')){
        $file = Input::file('file');
        $file->move('uploads', $file->getClientOriginalName());
    }

    $post=new marque;
    $post->nom=$request->input('nom');
    $post->refrerence=$request->input('refrerence');
    $post->id_model=$request->input('id_model');
    $post->url=$file->getClientOriginalName();
    $post->save();
    return redirect()->route('affiche_marque');
    
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
        $marque=marque::find($id);  
       // dd($marque);
        return view('modifier_marque', ['marque' => $marque]);

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
    $post=marque::find($id);  
    $post->nom=$request->input('nom');
    $post->refrerence=$request->input('refrerence');
    $post->id_model=$request->input('id_model');
    $post->save();
    //echo "succes";

    return redirect()->route('affiche_marque');

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
        $marque=DB::table('marques')->where('id',$id)->delete();
        return redirect()->route('affiche_marque');
        
    }
}
