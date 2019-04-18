<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard.index');
    }
    public function employerDashboard(){
        return view('employer.dashboard');
    }

    public function candidateDashboard(){
        return view('candidate.dashboard');
    }
}
