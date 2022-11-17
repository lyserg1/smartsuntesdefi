<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clima;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Poste;


class ClimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $climas = Clima::all(); */

        /*  $climas = Poste::find(1)->climas()->get(); */


        //De ejemplo
       /*  $id_poste = Poste::find(1)->id;

        $climas = Clima::where('poste_id',$id_poste)->paginate(5);
 */

        $climas = Clima::paginate(5);

        return view('clima.index', compact('climas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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
        $clima = Clima::find($id);
        $clima->delete();
        return redirect()->back();
    }
}
