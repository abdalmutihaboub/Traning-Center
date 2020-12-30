@extends('layouts.app2')

@section('content')
<div class="row justify-content-center">
        <div class="col-12">

            <div class="card">
            <div class="card-header">

                <b>Companies</b>

            </div>

                <div class="card-body ">
                <a href="{{route('company-specialty.create')}}" class="btn btn-sm btn-primary mb-2">Create Specialty for Company</a>
                <table class="table table-hover table-bordered">
                <thead>
                   <tr>
                       <th>id</th>
                       <th>Company</th>
                       <th>Specialty</th>
                       <th>action</th>
                    </tr>
                 </thead>
                 <tbody>
                     @foreach ($css as $cs)

                     <tr>
                         <td>{{$cs->id}}</td>
                         <td>{{$cs->company->name}}</td>
                         <td>{{$cs->specialty->name}}</td>
                         <td>
                            <a
                             href="{{route('company-specialty.edit',['company_specialty'=> $cs->id])}}"
                             class="btn btn-sm btn-primary"
                             >
                                Edit
                            </a>
                        <form action="{{route('company-specialty.destroy',['company_specialty'=>$cs->id])}}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>

@endsection
