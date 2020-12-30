@extends('layouts.app2')


@section('content')

<div class="row justify-content-center">


        <div class="col-12">

                <div class="card">
                        <div class="card-header">{{$pageName}}</div>
                                <form action="{{route('company-specialty.update',['company_specialty'=> $cs->id])}}" method="POST" class="p-4">
                                            @csrf

                                            @method('PATCH')


                                            <select name="company" class="form-control mb-3" i>
                                                  @foreach ($companies as $company)
                                                           <option value="{{$company->id}}" {{$cs->company_id == $company->id ?"selected" :""}} >{{$company->name}}</option>
                                                  @endforeach
                                            </select>



                                            <select name="specialty" class="form-control mb-3" i>
                                                  @foreach ($specialtys as $specialty)
                                                           <option value="{{$specialty->id}}" {{$cs->specialty_id == $specialty->id ?"selected" :""}}>{{$specialty->name}}</option>
                                                  @endforeach
                                            </select>


                                            <button class="btn btn-primary mt-3">Save</button>
                                </form>
                        </div>
            </div>
</div>

@endsection
