<?php

namespace App\Http\Controllers;
use App\Patient;
use App\antecedents;
use Illuminate\Http\Request;

class AntecedentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $patients =Patient::All();
    return view('medecin.patient.AjoutAnt')->with(compact('patients'));
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
          'ant'=>'required',
          'descAnt'=>'required',
         
        ]);

      //dd($request->all());

        $antecedents= new antecedents();

        $antecedents->categ_ant=$request->get('ant');
        $antecedents->Desc_ant=$request->get('descAnt');
        $antecedents->patient_id=$request->get('patient_id'); 

        $antecedents->save();


        return redirect()->route('Patient.index')->with('succees', 'nouveau ant ajouté avec succceé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\antecedent  $antecedent
     * @return \Illuminate\Http\Response
     */
    public function show(antecedents $antecedent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\antecedent  $antecedent
     * @return \Illuminate\Http\Response
     */
    public function edit(antecedents $antecedent)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\antecedent  $antecedent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, antecedents $antecedent)
    {
        //  $patient = Patient::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\antecedent  $antecedent
     * @return \Illuminate\Http\Response
     */
    public function destroy(antecedents $antecedent)
    {
        //
    }
}
