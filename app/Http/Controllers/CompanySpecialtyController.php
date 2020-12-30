<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanySpecialty;
use App\Specialty;
use Illuminate\Http\Request;

class CompanySpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $css = CompanySpecialty::all()->map(function($cs){
                  $company = Company::find($cs->company_id);
                  $specialty = Specialty::find($cs->specialty_id);
                  $cs->company= $company;
                  $cs->specialty = $specialty;
                  return $cs;
        });

        $data = ['css'=>$css,'pageName'=>"Company Specialty"];


        return view('company_speccialty.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'pageName'=> 'Create Specialty for Company',
            'companies'  => Company::all(),
            'specialtys' => Specialty::all()
        ];
        return view('company_speccialty.create',$data);
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

        $cs = new CompanySpecialty();

        $cs->company_id = $request->company;
        $cs->specialty_id = $request->specialty;
        $cs->save();
        return redirect()->back()->with('success','Company Specialty Create Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompanySpecialty  $companySpecialty
     * @return \Illuminate\Http\Response
     */
    public function show(CompanySpecialty $companySpecialty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanySpecialty  $companySpecialty
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanySpecialty $companySpecialty)
    {
        //

        return view('company_speccialty.edit',['pageName'=>"Edit Company Specialty",'cs'=>$companySpecialty,'companies'  => Company::all(),
            'specialtys' => Specialty::all()]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanySpecialty  $companySpecialty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanySpecialty $cs)
    {
        //

        $cs->company_id = $request->company;
        $cs->specialty_id = $request->specialty;
        $cs->save();
        return redirect()->back()->with('success','Company Specialty Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanySpecialty  $companySpecialty
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanySpecialty $companySpecialty)
    {
        //
        CompanySpecialty::destroy($companySpecialty->id);
        return redirect()->back()->with('success', 'Company Specialty Deleted Successfully.');
    }
}
