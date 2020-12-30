<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanySpecialty;
use App\Specialty;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ['pageName' => "Companies", 'companies' => Company::all()];
        return view('company.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('company.create', ['pageName' => "Create Company"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->manager = $request->manager;
        $company->msg = $request->msg;
        $company->save();
        return redirect()->back()->with('success', 'Company Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //

        return view('company.edit', ['pageName' => "Edit Company", 'company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->name = $request->name;
        $company->email = $request->email;
        $company->manager = $request->manager;
        $company->msg = $request->msg;
        $company->save();
        return redirect()->back()->with('success', 'Company Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();
        return redirect()->back()->with('success', 'Company Delete Successfully.');
    }


    public function getCompanies(Request $req)
    {


         $css = CompanySpecialty::where('specialty_id',$req->specialty)->get()->map(function($cs){
            $company = Company::find($cs->company_id);
            $specialty = Specialty::find($cs->specialty_id);
            $cs->company = $company;
            $cs->specialty = $specialty;
            return $cs;
         });


        return redirect()->back()->with('step2',$css);
    }
}
