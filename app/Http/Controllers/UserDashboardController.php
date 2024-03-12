<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class UserDashboardController extends Controller
{
    public function index()
    {
        $jobdata = Job::orderBy('id', 'desc')->limit(6)->get();

        return view('wellcome', compact('jobdata'));
    }
}
