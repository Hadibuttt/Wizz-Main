<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobResponsibility;

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
        return view('career.job_apply', compact('job'));
    }
}