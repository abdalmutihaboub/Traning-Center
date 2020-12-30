@extends('layouts.app2')


@section('content')

<div class="row justify-content-center">

        <div class="col-12">

                <div class="card">
                        <div class="card-header">{{$pageName}}</div>
                                <form action="{{route('specialty.store')}}" method="POST" class="p-4">
                                            @csrf
                                            <input type="text" name="name"  class="form-control " placeholder="specialty name">


                                            <button class="btn btn-primary mt-3">Save</button>
                                </form>
                        </div>
            </div>
</div>

@endsection
