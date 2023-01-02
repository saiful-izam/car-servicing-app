@extends('layouts.layout')

@section('content')
<div class="px-4 py-5 my-5">
    <h1 class="display-5 fw-bold text-center mb-5">Service</h1>
    <div class="row col-lg-10 mx-auto">
        <div class="col-lg-6">
            <p class="lead mb-4">Please fill information below</p>
            <form action="">
                <div class="col-lg-10 mb-4">
                    <label for="customerName" class="form-label">Customer Name:</label>
                    <input type="text" class="form-control" name="customerName" id="customerName" placeholder="eg: Saiful Izam Samsudin">
                </div>
                <div class="col-lg-10 mb-4">
                    <label for="customerPhoneNo" class="form-label">Customer Phone No:</label>
                    <input type="text" pattern="[0-9]" name="customerPhoneNo" class="form-control" id="customerPhoneNo" placeholder="eg: 0186407088">
                </div>
                <div class="col-lg-10 mb-4">
                    <label for="customerVehicleNo" class="form-label">Customer Vehicle No:</label>
                    <input type="text" class="form-control" name="customerVehicleNo" id="customerVehicleNo" placeholder="eg: MDG8073">
                </div>
                <div class="col-lg-10 mb-4">
                    <label for="vehicleCurrentMilage" class="form-label">Current Milage:</label>
                    <input type="numeric" name="vehicleCurrentMilage" id="vehicleCurrentMilage" class="form-control" placeholder="100000">
                </div>
                <div class="col-lg-10 mb-4">
                    <label for="vehicleNextMilage" class="form-label">Next Milage:</label>
                    <input type="numeric" name="vehicleNextMilage" id="vehicleNextMilage" class="form-control" placeholder="100000">
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <p class="lead mb-4">Item for Services</p>
            <form action="">
                <div class="col-lg-10 mb-4">
                    <div class="col-lg-12">
                        <label for="engineOil" class="form-label">Engine Oil:</label>
                    </div>
                    <div class="col-lg-12 row">
                        <div class="col-lg-8">
                            <input type="text" name="engineOil" id="engineOil" class="form-control text-right" value="0.00">
                        </div>
                        <span class="col-lg-4 form-label pt-2 px-0">RM</span>
                    </div>
                </div>
                <div class="col-lg-10 mb-4">
                    <div class="col-lg-12">
                        <label for="oilFilter" class="form-label">Oil Filter:</label>
                    </div>
                    <div class="col-lg-12 row">
                        <div class="col-lg-8">
                            <input type="text" name="oilFilter" id="oilFilter" class="form-control text-right" value="0.00">
                        </div>
                        <span class="col-lg-4 form-label pt-2 px-0">RM</span>
                    </div>
                </div>
                <div class="col-lg-10 mb-4">
                    <div class="col-lg-12">
                        <label for="gearboxOil" class="form-label">Gearbox Oil:</label>
                    </div>
                    <div class="col-lg-12 row">
                        <div class="col-lg-8">
                            <input type="text" name="gearboxOil" id="gearboxOil" class="form-control text-right" value="0.00">
                        </div>
                        <span class="col-lg-4 form-label pt-2 px-0">RM</span>
                    </div>
                </div>
                <div class="col-lg-10 mb-4">
                    <div class="col-lg-12">
                        <label for="powerSteeringOil" class="form-label">Power Steering Oil:</label>
                    </div>
                    <div class="col-lg-12 row">
                        <div class="col-lg-8">
                            <input type="text" name="powerSteeringOil" id="powerSteeringOil" class="form-control text-right" value="0.00">
                        </div>
                        <span class="col-lg-4 form-label pt-2 px-0">RM</span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 text-center">
            <button class="btn btn-warning" id="submitBtn">Submit</button>
        </div>
    </div>
</div>
@endsection