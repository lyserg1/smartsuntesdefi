<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poste;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $postes = Poste::all();
        return view('poste.index')->with('postes', $postes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poste.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();


            $poste = Poste::create([
                'direccion' => $data['direccion'],
                'region' => $data['region'],
                'comuna' => $data['comuna'],
                'estado' => $data['estado'],
                'user_id' => Auth::user()->id,
            ]);

        return redirect()->route('poste.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* $poste = Poste::find($id);
        return view('poste.show', compact('poste')); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poste = Poste::find($id);
        return view('poste.edit', compact('poste'));
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

        Poste::find($id)->update([
            'direccion' => $request->direccion,
            'region' => $request->region,
            'comuna' => $request->comuna,
            'estado' => $request->estado,


        ]);


        return redirect()->route('poste.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poste = Poste::find($id);
        $poste->delete();
        return redirect()->back();
    }
}
