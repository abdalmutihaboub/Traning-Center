@extends('layouts.app2')


@section('content')

<div class="row justify-content-center">


        <div class="col-12">

                <div class="card ">

                        <div class="card-header">{{$pageName}}</div>

                                <form
                                     action="{{route('specialty.update',['specialty'=> $specialty->id])}}"
                                     method="POST"
                                     class="p-4"
                                     >
                                     @csrf
                                     @method('PATCH')
                                            <input type="text" name="name" value="{{$specialty->name}}" class="form-control" placeholder="company name">

                                            <button class="btn btn-primary mt-3">Save</button>
                                </form>
                        </div>
            </div>
</div>

@endsection
