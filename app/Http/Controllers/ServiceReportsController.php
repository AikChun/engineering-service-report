<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\ServiceReport;
use App\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

class ServiceReportsController extends Controller
{

    /**
     * Return a list of Service Reports belonging to the authenticated user
     *
     * @param Authenticatable $user
     */
    public function index(Authenticatable $user)
    {
        $serviceReports = \DB::table('service_reports')->get();
        return view('service_reports.index', compact('serviceReports'));
    }


    /**
     * Show individual Service Reports
     *
     * @param ServiceReport $serviceReport
     */
    public function show(ServiceReport $serviceReport) 
    {
        return view('service_reports.show', compact('serviceReport'));
    }

    /**
    * Show create form
    * @return view
    */
    public function showForm()
    {
        return view('service_reports.create');
    }

    /**
     * Save a new Service Report
     * @param Request $request
     * @param Authenticatable $user
     */
    public function store(Request $request, Authenticatable $user) 
    {
        $serviceReport = new \App\ServiceReport($request->all());
        $serviceReport->save();
        return back();
    }



    
}
