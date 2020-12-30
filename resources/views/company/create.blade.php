@extends('layouts.app2')


@section('content')

<div class="row justify-content-center">


        <div class="col-12">

                <div class="card">
                        <div class="card-header">{{$pageName}}</div>
                                <form action="{{route('companies.store')}}" method="POST" class="p-4">
                                            @csrf
                                            <input type="text" name="name"  class="form-control my-2" placeholder="company name">
                                            <input type="text" name="email"  class="form-control my-2" placeholder="company email">
                                            <input type="text" name="manager"  class="form-control my-2" placeholder="company manager">
                                            <input type="text" name="msg"  class="form-control my-2" placeholder="Message For Student or Customer">
                                            <button class="btn btn-primary mt-3">Save</button>
                                </form>
                        </div>
            </div>
</div>

@endsection
