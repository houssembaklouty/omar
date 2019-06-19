<?php

namespace App\Http\Controllers;
use PDF;
use App\Lettre;
use App\Patient;
use Illuminate\Http\Request;

class LettreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $patients =Patient::All();
        $lettres= Lettre::All();
        return view('medecin.Lettre.index')->with(compact('lettres','patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $patients =Patient::All();
          return view('medecin.Lettre.create')->with(compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate([
          'etatSant'=>'required',
          'nomConf'=>'required',
          'prenomConf'=>'required',
          'SpecConf'=>'required',
         
        ]);
         $lettre= new Lettre();
       
        $lettre->etatSant=$request->get('etatSant');
        $lettre->nomConf=$request->get('nomConf');
        $lettre->prenomConf=$request->get('prenomConf');
        $lettre->SpecConf=$request->get('SpecConf');
        $lettre->patient_id=$request->get('patient_id'); 
        $lettre->commentaire=$request->get('comment'); 
        $lettre->save();

    return redirect()->route('Lettre.index')->with('succées', 'Succeés,nouveau Lettre ajouté');

     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function show(Lettre $lettre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function edit(Lettre $lettre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lettre $lettre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lettre $lettre)
    {
        //
    }
    public function downloadPDF($id){
      $lettre = Lettre::find($id);

      $pdf = PDF::loadView('medecin/Lettre/pdf1', compact('lettre'));
      return $pdf->download('lettre.pdf');

    }
}
