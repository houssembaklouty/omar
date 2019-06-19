<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Ordonance;
use Illuminate\Http\Request;
use PDF;
use DB;
use App\posologie;

class OrdonanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordonances = Ordonance::all();
       
     // return view('vueOrd', compact('ordonances'));
       return view('medecin.Ordonance.vueOrd')->with('ordonances',$ordonances);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $patients = Patient::all();
        $IDpatient ='';

        return view('medecin/Ordonance/nvOrd',compact('patients','IDpatient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                   'patient_id' => 'required|integer',
                   'nbrDose' => 'required',
                   'DureeTotal' => 'required',
                   'nbr_jour' => 'required',
                   'nomMedic' => 'required',
               ]);

               if(is_null($request->commentaire))
               {
                   $request->commentaire = 'null';
               }


               $patients = Patient::get();

               $ordonance = new Ordonance([
                  'consultation_id' => '1',
                  'patient_id' => $request->get('patient_id'),
               ]);
               $ordonance->save();

               $n = count($request->nbrDose);

               for ($i=0; $i < $n ; $i++) { 
                   $posologie = new Posologie([
                      'nbrDose' => $request->nbrDose[$i],
                      'DureeTotal' => $request->DureeTotal[$i],
                      'nbr_jour' => $request->nbr_jour[$i],  
                      'nomMedic' => $request->nomMedic[$i],
                      'commentaire' => $request->commentaire,
                      'ordonance_id' => $ordonance->id,
                   ]);

                   $posologie->save();
               }
       
        return response()->json(['success'=>"Ordonance bien ajouté .. !"], 200);
    }

    public function create_medicaments(Request $request)
    {
        $patient_id = $request['patient_id'];

        $patientID = Patient::find($patient_id);

        $ordonance = new Ordonance([
           'consultation_id' => '1',
           'patient_id' => $request->get('patient_id'),
        ]);
        $ordonance->save();

        $courrent_posologie ='';

        return view('medecin/Ordonance/create_medicamets', compact('patientID','courrent_posologie'));
    }

    public function store_medicaments(Request $request)
    {
        $patient_id = $request['patient_id'];

        if(is_null($request->commentaire))
        {
            $request->commentaire = 'null';
        }

        $last_Ordonance = Ordonance::latest()->first()->id;

        $courrent_posologie = Posologie::where('ordonance_id', $last_Ordonance)->get();

        $patientID = Patient::find($patient_id);

        $posologie = new Posologie([
           'nbrDose' => $request->nbrDose,
           'DureeTotal' => $request->DureeTotal,
           'nbr_jour' => $request->nbr_jour,
           'nomMedic' => $request->nomMedic,
           'commentaire' => $request->commentaire,
           'ordonance_id' => $last_Ordonance,
        ]);
        $posologie->save();

        //dd($courrent_posologie);

        return view('medecin/Ordonance/create_medicamets', compact('patientID', 'courrent_posologie'));

        //return redirect('medecin/Ordonance/vueOrd')->with('success', 'Ordonance a été Ajouteé Avec Succes');
    }

    public function create_medicamets()
    {  
        $patient_id = $request['patient_id'];

        $patientID = Patient::find($patient_id);

        return view('medecin/Ordonance/create_medicamets', compact('patientID'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Ordonance  $ordonance
     * @return \Illuminate\Http\Response
     */
    public function show(Ordonance $ordonance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ordonance  $ordonance
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordonance $ordonance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ordonance  $ordonance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordonance $ordonance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ordonance  $ordonance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordonance $ordonance)
    {
        //
    }
    public function downloadPDF($id){
      $ord = Ordonance::find($id);
      $pdf = PDF::loadView('medecin/Ordonance/pdf', compact('ord'));
      return $pdf->download('ordonance.pdf');

    }
    public function ordonance(){

        dd('dddd');



$patients = Patient::get();
     $medicaments = Medicament::get();
         $details =Detail::get();

         dd($patients);

    return view('medecin/Ordonance/nvOrd', compact('details','patients','medicaments'));
   
}

}