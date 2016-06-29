<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\ServiceReport;
use App\User;
use DB;
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
        $serviceReports = DB::table('service_reports')->get();
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

        try {
            DB::beginTransaction();

            DB::insert('insert into service_reports (contact_person, customer_name, email, fax, reference_number, telephone) values (?, ?, ?, ?, ?, ?)', [$request->contact_person, $request->customer_name, $request->email, $request->fax, $request->reference_number, $request->telephone]);
            DB::select('select * from users where name = ?', ['lajdlkasjdlka;sdjasj;asj']);
        } catch (Exception $e) {
            DB::rollback();
        }
        DB::commit();

        //$serviceReport->save();
        return back();
    }



    
}
