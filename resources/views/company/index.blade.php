@extends('layouts.app2')

@section('content')
<div class="row justify-content-center">
        <div class="col-12">

            <div class="card">
            <div class="card-header">

                <b>Companies</b>

            </div>

                <div class="card-body ">
                <a href="{{route('companies.create')}}" class="btn btn-sm btn-primary mb-2">Create Company</a>
                <table class="table table-hover table-bordered">
                <thead>
                   <tr>
                       <th>id</th>
                       <th>name</th>
                       <th>manager</th>
                       <th>email</th>
                       <th>action</th>
                    </tr>
                 </thead>
                 <tbody>
                     @foreach ($companies as $company)

                     <tr>
                         <td>{{$company->id}}</td>
                         <td>{{$company->name}}</td>
                         <td>{{$company->manager}}</td>
                         <td>{{$company->email}}</td>
                         <td>
                            <a
                             href="{{route('companies.edit',['company'=> $company->id])}}"
                             class="btn btn-sm btn-primary"
                             >
                                Edit
                            </a>
                        <form action="{{route('companies.destroy',['company'=>$company->id])}}" class="d-inline" method="POST">
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
