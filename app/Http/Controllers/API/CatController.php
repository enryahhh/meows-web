<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\Cat;


class CatController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUser = auth()->user()->id;
        $cats = Cat::where('id_user','=',$idUser)->get();
        return $this->success([
            'cats' => $cats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('photo')){
            $photoName = date('YmdHis').'.'.$request->photo->extension();  
            $request->photo->move(public_path('storage'), $photoName);
        }else{
            $photoName = null;
        }
        $cat = Cat::create([
            'id_user' => auth()->user()->id,
            'nama_kucing' => $request->nama_kucing,
            'jk' => $request->jk,
            'birth' => $request->birth,
            'ras' => $request->ras,
            'photo' => $photoName
        ]);

        return $this->success([
            'cat' => $cat
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::find($id)->get();
        return $this->success([
            'cat' => $cat
        ]);
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
        $cat = Cat::find($id);
        if($request->file('photo')){
            $photoName = date('YmdHis').'.'.$request->photo->extension();  
            $request->photo->move(public_path('storage'), $imageName);
        }else{
            $photoName = $cat->photo;
        }
            $cat->nama_kucing = $request->nama_kucing;
            $cat->jk = $request->jk;
            $cat->birth = $request->birth;
            $cat->ras = $request->ras;
            $cat->photo = $photoName;
            $cat->save();

        return $this->success([
            'cat' => $cat
        ]); 
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
