@extends('layouts.layout')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Car Servicing Application</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Please select your service: </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="{{url('service')}}" class="btn btn-outline-secondary btn-lg px-4 gap-3">Service</a>
        <a href="{{url('repair')}}" class="btn btn-outline-secondary btn-lg px-4">Repair</a>
        </div>
    </div>
</div>
@endsection


