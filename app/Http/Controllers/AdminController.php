<?php

namespace App\Http\Controllers;

use Notification;
use App\Models\Doctor;
use App\Models\Appointment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function addview(){

        if(Auth::id()){

            if(Auth::user()->usertype==1){

               return view('admin.add_doctor');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }


    }

    public function upload(Request $request){

        $doctor=new Doctor;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage',$imagename);

        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function showappointments(){

        if(Auth::id()){
            if(Auth::user()->usertype==1){

                $data=Appointment::all();

                return view('admin.appointmentview',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }

        $data=Appointment::all();

        return view('admin.appointmentview',compact('data'));
    }

    public function approved($id){

        $data=Appointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();
    }

    public function cancle($id){

        $data=Appointment::find($id);

        $data->status='Cancled';

        $data->save();

        return redirect()->back();
    }

    public function showdoctors(){

        if(Auth::id()){
            if(Auth::user()->usertype==1){

                $data=Doctor::all();

                return view('admin.alldoctors',compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        return redirect('login');


    }

    public function deletedoctor($id){

        $data=Doctor::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatedoctor($id){

        $data=Doctor::find($id);

        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor(Request $request, $id){

        $doctor=Doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

         $image=$request->image;
         if($image){

            $imagename =time().'.'.$image->getClientOriginalExtension();

            $request->image->move('doctorimage',$imagename);

            $doctor->image=$imagename;
         }



        $doctor->save();

        return redirect()->back()->with('message','Doctor Profile Updated Successfully!');
    }

    public function mailsend($id){

        $data=Appointment::find($id);

        return view('admin.sendmail',compact('data'));
    }

    public function sendmail(Request $request, $id){

         $data=Appointment::find($id);

         $details=[

            'greeting'=> $request->greeting,
            'body'=> $request->body,
            'actiontext'=> $request->actiontext,
            'actionurl'=> $request->actionurl,
            'endpart'=> $request->endpart,
         ];

         Notification::send($data,new SendEmailNotification($details));

         return redirect()->back()->with('message','Email Send is Successful');

    }

}