<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultations = Consultation::with('patient')->get();
        //dd($consultations);
      
        return view('medecin.Consultation.listeCons')->with(compact('consultations'));
    }

    public function nv_ord($IDpatient)
    {
        $patient = Patient::find($IDpatient);
        $patients = Patient::all();
        //dd($patient);

        return view('medecin.Ordonance.nvOrd', compact('patients','IDpatient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $patients = Patient::get();
      return view('medecin/Consultation/newCons',compact('patients'));     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $patients = Patient::get();
        $consultation = new Consultation([
        'diagMedic' => $request->get('dm'),
        'ExamComp' => $request->get('ec'),
        'Exam_Clin' => $request->get('exC'),
        'MotifCons'=> $request->get('mc'),
        'id_patient'=> $request->get('p'),    
        'TarifCons'=> $request->get('t'),
         ]);

      $consultation->save();
      return redirect('medecin/Consultation')->with('success', 'consultation a été Ajouteé Avec Succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        dd($consultation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        $cons = Consultation::find($id);
  
        $cons->delete();
       return redirect('medecin.Consultation.listeCons')->with('success', 'L Actualité a été Supprimer Avec Succés');
    }
}
