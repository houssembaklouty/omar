<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function profilMed($id)

    { 

     $patient = Patient::findOrFail($id);

     $patient = Patient::where('id', $id)
                  ->with('ordonance')->get();

      dd($patient);


       return view('medecin/Patient/profilMed')->with(compact('patient'));
    }
    public function index()
    {
       $patients= Patient::All();     

        return view('medecin/Patient/gererpatient', compact('patients'));
    }
    public function indexx()
    {
       $patients= Patient::All();        
         /*   return view('index', compact('patients'));  */
        return view('medecin/Patient/gererpatient')->with('patients',$patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medecin.patient.nvPatient');
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
          'nom'=>'required',
          'prenom'=>'required',
          'Tel'=>'required|unique:patients',
          'cin'=>'required|unique:patients',
          'dateNais'=>'required|date|before:today',
          'pro'=>'required|max:63',
          'email'=>'required|email|max:255|unique:patients',
          'sexe'=>'required|max:50',
          'adresse'=>'required|max:255'
        ]);

      //dd($request->all());

        $patient= new Patient();

        $patient->nom=$request->get('nom');
        $patient->prenom=$request->get('prenom');
        $patient->adressePatient=$request->get('adresse');
        $patient->cin=$request->get('cin');
        $patient->dateNais=$request->get('dateNais');
        $patient->sexe=$request->get('sexe');
        $patient->Tel=$request->get('Tel');
        $patient->email=$request->get('email');
        $patient->ville=$request->get('ville');
        $patient->profession=$request->get('pro');
        $patient->password=Hash::make('0000');

        $patient->save();


        return redirect()->route('Patient.index')->with('succees', 'nouveau patient ajouté avec succceé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
         $patient = Patient::findOrFail($patient);
        return view('medecin/Patient/gererpatient',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $patient = Patient::find($id);
         return view('medecin/Patient/modifPatient')->with('patient',$patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

     
      $patient = Patient::find($id);

      $request->validate([
        'nom'=>'required',
        'prenom'=>'required',
        'Tel'=>'required|digits:8',
        'cin'=>'required|digits:8',
        'dateNais'=>'required|date|before:today',
        'pro'=>'required|max:63',
        'mail'=>'required|email|max:255',
        'adresse'=>'required|max:255'
      ]);

      $patient = Patient::find($id);
      
      $patient->nom=$request->get('nom');
      $patient->prenom=$request->get('prenom');
      $patient->adressePatient=$request->get('adresse');
      $patient->cin=$request->get('cin');
      $patient->dateNais=$request->get('dateNais');
      $patient->sexe=$request->get('sexe');
      $patient->Tel=$request->get('Tel');
      $patient->Email=$request->get('mail');
      $patient->ville=$request->get('ville');
      $patient->profession=$request->get('pro');

      $patient->save();
        return redirect()->route('Patient.index')->with('success', 'Succeés,nouveau patient edité');

    }
    public function destroy(Patient $patient)
    {
        //
    }

    public function allPatients()
    {

        $patients = Patient::get();

        return view('IHMPatients', compact('patients'));
    }
}
