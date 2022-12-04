<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobApplicant;
use App\Models\JobResponsibility;
use Location;
use Storage;
use Mail;

class CareerController extends Controller
{
    public function view()
    {
        $jobs = Job::all();
        return view('career.job', compact('jobs'));
    }

    public function details($id)
    {
        $id = decrypt($id);
        $job = Job::find($id);
        return view('career.job_detail', compact('job'));
    }

    public function application_form($id)
    {
        $id = decrypt($id);
        $job = Job::find($id);

        //IP Address
        $ipaddress = '';

        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = '127.0.0.1';

        if($ipaddress != '127.0.0.1') {
            $location = Location::get($ipaddress);
            $IPArray = json_decode(json_encode($location), true);
            $ip_address = $IPArray['ip'];
            // $country_array = $IPArray['countryName']; 
        } else {
            $ip_address = '127.0.0.1';
            // $country_array = '';
        }

        $applicant = JobApplicant::where('ip_address', $ip_address)->latest()->first();
        $HasAppliedForJob = JobApplicant::where('job_id', $job->id)->where('ip_address', $ip_address)->latest()->first();

        return view('career.job_apply', compact('job','applicant','HasAppliedForJob'));
    }

    public function application_form_apply(Request $request, $id)
    {
        $id = decrypt($id);
        $job = Job::find($id);

        //Checking if user has applied with same email or phone
        $HasAppliedWithEmail = JobApplicant::where('job_id',$job->id)->where('email',$request->email)->first();
        $HasAppliedWithPhone = JobApplicant::where('job_id',$job->id)->where('phone',$request->phone)->first();

        //If Applicant Has Applied with Same Email
        if ($HasAppliedWithEmail) {
            JobApplicant::find($HasAppliedWithEmail->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address
            ]);

            return redirect()->back()->with('success', 'Application Updated Successfully!');
        }
        //If Applicant Has Applied with Same Phone
        elseif ($HasAppliedWithPhone) {
            JobApplicant::find($HasAppliedWithPhone->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address
            ]);

            return redirect()->back()->with('success', 'Application Updated Successfully!');
        }
        //Creating Applicant for Job Applied
        else{
        //Getting IP Address
        $ipaddress = '';

        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = '127.0.0.1';

        if($ipaddress != '127.0.0.1') {
            $location = Location::get($ipaddress);
            $IPArray = json_decode(json_encode($location), true);
            $ip_address = $IPArray['ip'];
            // $country_array = $IPArray['countryName']; 
        } else {
            $ip_address = '127.0.0.1';
            // $country_array = '';
        }

        if ($request->has('resume')){
        //Resume Upload
        $uploadedFile = $request->file('resume');
        $filename = $request->first_name.' '.$request->last_name.'-'.time().'.'.$uploadedFile->extension();
        $filepath = 'careers/'.$job->title.'/applicants'.'/'.$filename;

        Storage::disk('s3')->put($filepath, file_get_contents($uploadedFile));

        // Storage::disk('local')->putFileAs(
        // 'careers/'.$job->title.'/applicants'.'/',
        // $uploadedFile,
        // $filename
        // );
        }else{
            $filepath = '';
        }
        
        $applicant = new JobApplicant();
        $applicant->job_id = $job->id;
        $applicant->ip_address = $ip_address;
        $applicant->first_name = $request->first_name;
        $applicant->last_name = $request->last_name;
        $applicant->email = $request->email;
        $applicant->phone = $request->phone;
        $applicant->address = $request->address;
        $applicant->resume = $filepath;
        $applicant->save();

        $data = array(
            'email' => $request->email,
            'full_name' => $request->first_name.' '.$request->last_name,
            'job' => $job
        );

        //Sending Mail to User Email
        Mail::send('emails.applied', $data,
        function($message) use($data){
        $message->to($data['email'], $data['full_name'])
        ->subject('Thank you for applying to the'.' '.$data['job']->title.' '.'position at Wizz Logistics.')
        ->from('donotreply@wizz-express.com','Wizz Express & Logistics');
        });

        return redirect()->back()->with('success', 'We have recieved your application. Stay tuned for updates!');
        }
    }
}