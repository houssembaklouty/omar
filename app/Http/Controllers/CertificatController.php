<?php

namespace App\Http\Controllers;

use App\certificat;
use Illuminate\Http\Request;
use PDF;
use DB;
use App\Patient;
use App\Dispense;
use App\Aptitude;
use App\Consultation;

class CertificatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $certificats = certificat::all();
        $patients =Patient::All();
        $consultations = Consultation::all();

        $certificats = certificat::with('patient')->get();

        return view('medecin.Certificat.index')->with(compact('certificats','patients','consultations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $patients = Patient::all();
         return view('medecin/Certificat/create',compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->type == 'dispense') {

            $certificat = new certificat([
            'patient_id' => $request->get('patient_id'),
            'commentaire' => $request->get('comment'),
            'type' => $request->get('type'),
             ]);
            $certificat->save();

            $dispense = new Dispense([
            'dateRepos' => $request->get('dateRepos'),
            'NbrJourRepos' => $request->get('NbrJourRepos'),
            'certificat_id' => $certificat->id,
             ]);
            $dispense->save();
        }

        if ($request->type == 'aptitude') {
             $certificat = new certificat([
            'patient_id' => $request->get('patient_id'),
            'commentaire' => $request->get('comment'),
         'type' => $request->get('type'),
             ]);
            $certificat->save();

            $aptitude = new Aptitude([
            'Decision' => $request->get('Decision'),
            'etatSante'=> $request->get('etatSant'),
            'certificat_id' => $certificat->id,
             ]);
            $aptitude->save();
        }

      return redirect('medecin/Certificat')->with('succees', 'Certificat a été Ajouteé Avec Succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\certificat  $certificat
     * @return \Illuminate\Http\Response
     */
    public function show(certificat $certificat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\certificat  $certificat
     * @return \Illuminate\Http\Response
     */
    public function edit(certificat $certificat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\certificat  $certificat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, certificat $certificat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\certificat  $certificat
     * @return \Illuminate\Http\Response
     */
      public function downloadPDF($id){
      $certif =certificat::find($id);
      $pdf = PDF::loadView('medecin/Certificat/pdf', compact('certif'));
      return $pdf->download('certif.pdf');

    }
    public function destroy(certificat $certificat)
    {
        //
    }
}
