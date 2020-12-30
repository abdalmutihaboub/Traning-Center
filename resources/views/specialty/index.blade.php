@extends('layouts.app2')

@section('content')
<div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
            <div class="card-header"><b>{{$pageName}}</b></div>

                <div class="card-body ">
                <a href="{{route('specialty.create')}}" class="btn btn-sm btn-primary mb-2">Create specialty</a>
                <table class="table table-hover table-bordered">
                <thead>
                   <tr>
                       <th>id</th>
                       <th>name</th>
                       <th>action</th>
                    </tr>
                 </thead>
                 <tbody>
                     @foreach ($specialtys as $special)

                     <tr>
                     <td>{{$special->id}}</td>
                         <td>{{$special->name}}</td>
                         <td>
                            <a
                             href="{{route('specialty.edit',['specialty'=> $special->id])}}"
                             class="btn btn-sm btn-primary"
                             >
                                Edit
                            </a>
                        <form action="{{route('specialty.destroy',['specialty'=>$special->id])}}" class="d-inline" method="POST">
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
