@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                        @if (Auth::user()->role==1)

                                      @include('userSelecte')

                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

