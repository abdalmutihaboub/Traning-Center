@extends('layouts.app2')


@section('content')

<div class="row justify-content-center">


        <div class="col-12">

                <div class="card">
                        <div class="card-header">{{$pageName}}</div>
                                <form action="{{route('company-specialty.store')}}" method="POST" class="p-4">
                                            @csrf


                                            <select name="company" class="form-control mb-3" i>
                                                  @foreach ($companies as $company)
                                                           <option value="{{$company->id}}">{{$company->name}}</option>
                                                  @endforeach
                                            </select>



                                            <select name="specialty" class="form-control mb-3" i>
                                                  @foreach ($specialtys as $specialty)
                                                           <option value="{{$specialty->id}}">{{$specialty->name}}</option>
                                                  @endforeach
                                            </select>


                                            <button class="btn btn-primary mt-3">Save</button>
                                </form>
                        </div>
            </div>
</div>

@endsection
