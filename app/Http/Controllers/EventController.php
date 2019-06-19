<?php

namespace App\Http\Controllers;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

use Illuminate\Http\Request;

use App\Mail\SendMailable;

use App\Event;
use Carbon;
use App\Patient;
use Mail;

class EventController extends Controller
{
    public function newRDV()
    {
 $patients = Patient::get();
$data = Event::get();
 $test=array();
foreach($data as $index => $dat){

$rdv = Carbon::parse($data[$index]['start_date']);
$res= $rdv->format('H');
 /*$patients = Patient::all();
  */
//array_push($test,$res);

//var_dump($test);
}
$test=[0, 1, 2, 3, 4, 5, 6, 7, 8, 18, 19, 20, 21, 22,23];
//return ($test);


/*
//$result = Carbon::createFromFormat('d/m/Y',$data);


//$data2=$data->format('H:i:s');
//
        //var_dump($result);

        $test=array();
        $dis=23;
        array_push($test,$dis);
        
/*dd($test);*/
      return view('createevent',['test'=> $test,'patients'=>$patients]);
      
    }


public function store(Request $request)
    { 
        $event= new Event();
        $data = Event::get();
        $ss=$request->get('patient_id');
        $patient_choisi = json_decode($ss, true);
        $event->title=$patient_choisi['nom'];


        $event->start_date=Carbon::parse($request->get('startdate'));
        $event->end_date=Carbon::parse($request->get('startdate'));
        $comp=Carbon::parse($request->get('startdate'));
        $test=array();     
$name=$ss;



$date_rdv=Carbon::parse($request->get('startdate'));
//dd($data['id']);

          
            Mail::to($patient_choisi['email'])->send(new SendMailable($date_rdv));



foreach($data as $index => $dat){

$rdv = Carbon::parse($data[$index]['start_date']);

        array_push($test,$rdv);
    }

if(in_array($comp, $test))
{
  
return redirect('gererRdv')->with('error', 'veuillez choisir une autre date');

}else

{
  $event->save();
return redirect('gererRdv')->with('success', 'Event has been added');
}    
        
    }

public function calendar()
            {
                $events = [];
                $data = Event::all();
                if($data->count())
                 {
                    foreach ($data as $key => $value) 
                    {
                        $events[] = Calendar::event(
                            $value->title,
                            true,
                            new \DateTime($value->start_date),
                            new \DateTime($value->end_date.'+1 day'),
                            null,
                            // Add color
                         [
                             'color' => '#000000',
                             'textColor' => '#008000',
                         ]
                        );
                    }
                }
                $calendar = Calendar::addEvents($events);
                return view('calendar', compact('calendar'));
            }
}