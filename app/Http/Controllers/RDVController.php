<?php

namespace App\Http\Controllers;

use App\rdv;
use Illuminate\Http\Request;

class RDVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $rdv = rdv::all()->toArray();
        
        return view('rdv.index', compact('rdv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('rdv.createRdv');
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
        $rdv = new rdv([
          'etat' => $request->get('etat'),
            'motif' => $request->get('motif'),
          'date' => $request->get('date')
        ]);

        $rdv->save();
        return redirect('/rdv');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RDV  $rDV
     * @return \Illuminate\Http\Response
     */
    public function show(RDV $rDV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RDV  $rDV
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $rdv = rdv::find($id);
        
        return view('rdv.edit', compact('rdv','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RDV  $rDV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $rdv = rdv::find($id);
        $rdv->etat = $request->get('etat');
        $rdv->date= $request->get('date');
        $rdv->motif = $request->get('motif');
        
        $rdv->save();
        return redirect('/rdv');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RDV  $rDV
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rdv = RDV::find($id);
      $rdv->delete();

      return redirect('/rdv');
    }
}
