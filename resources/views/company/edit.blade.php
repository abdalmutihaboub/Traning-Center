@extends('layouts.app2')


@section('content')

<div class="row justify-content-center">


        <div class="col-12">

                <div class="card">
                        <div class="card-header">{{$pageName}}</div>
                                <form action="{{route('companies.update',['company'=> $company->id])}}" method="POST" class="p-4">
                                     @csrf
                                     @method('PATCH')
                                            <input type="text" name="name" value="{{$company->name}}" class="form-control my-2" placeholder="company name">
                                            <input type="text" name="email"  value="{{$company->email}}" class="form-control my-2" placeholder="company email">
                                            <input type="text" name="manager"  value="{{$company->manager}}" class="form-control my-2" placeholder="company manager">
                                            <input type="text" name="msg"  class="form-control my-2" placeholder="Message For Student or Customer">

                                            <button class="btn btn-primary mt-3">Save</button>
                                </form>
                        </div>
            </div>
</div>

@endsection
