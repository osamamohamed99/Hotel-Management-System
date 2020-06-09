@extends('layouts.app')

@section('content')



<div class="container-fluid" style="background-color:steelblue;">
    <div class="row justify-content-center">
        <div class="mt-5 col-6">
            <form method="POST" action="{{'/'}}" style="padding:30px;">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-12">
                        <h3 style="text-align: center;font-size: 30px;color: white;text-shadow: 1px 1px #295c86;font-weight: bold;margin-bottom: 20px;">Select Room</h3>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card" style="    width: 18rem;background: transparent;border-radius: 0;border-top: 5px solid white;border-bottom: 5px solid white;border-left: 2px dashed white;border-right: 2px dashed white;">
                            <img class="card-img-top" src="{{ asset('images/bed.png') }}" style="width: 60%;height: 60%;display: block;margin-left: auto;margin-right: auto;margin-top: 10px;">
                            <hr>
                            <div class="card-body">
                              <h5 class="card-title" style="color: white;font-weight:bold;text-align:center">Single Room</h5>
                              <input type="radio" name="room" id="" value="single" style="display: block;margin-left: auto;margin-right: auto;transform: scale(1.2)">
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card" style="    width: 18rem;background: transparent;border-radius: 0;border-top: 5px solid white;border-bottom: 5px solid white;border-left: 2px dashed white;border-right: 2px dashed white;">
                            <img class="card-img-top" src="{{ asset('images/bed.png') }}" style="width: 60%;height: 60%;display: block;margin-left: auto;margin-right: auto;margin-top: 10px;">
                            <hr>
                            <div class="card-body">
                              <h5 class="card-title" style="color: white;font-weight:bold;text-align:center">Double Room</h5>
                              <input type="radio" name="room" id="" value="double" style="display: block;margin-left: auto;margin-right: auto;transform: scale(1.2)">
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card" style="    width: 18rem;background: transparent;border-radius: 0;border-top: 5px solid white;border-bottom: 5px solid white;border-left: 2px dashed white;border-right: 2px dashed white;">
                            <img class="card-img-top" src="{{ asset('images/bed.png') }}" style="width: 60%;height: 60%;display: block;margin-left: auto;margin-right: auto;margin-top: 10px;">
                            <hr>
                            <div class="card-body">
                              <h5 class="card-title" style="color: white;font-weight:bold;text-align:center">Family Room</h5>
                              <input type="radio" name="room" id="" value="family" style="display: block;margin-left: auto;margin-right: auto;transform: scale(1.2)">
                            </div>
                          </div>
                    </div>
                </div>

                <br>
                
                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <h3 style="text-align: center;font-size: 30px;color: white;text-shadow: 1px 1px #295c86;font-weight: bold;margin-bottom: 20px;">Select Meal</h3>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card" style="background: transparent;border-radius: 0;border-top: 5px solid white;border-bottom: 5px solid white;border-left: 2px dashed white;border-right: 2px dashed white;">
                            <img class="card-img-top" src="{{ asset('images/breakfast.png') }}" style="width: 60%;height: 60%;display: block;margin-left: auto;margin-right: auto;margin-top: 10px;">
                            <hr>
                            <div class="card-body">
                              <h5 class="card-title" style="color: white;font-weight:bold;text-align:center">Room Only</h5>
                              <input type="radio" name="meal" id="" value="room only" style="display: block;margin-left: auto;margin-right: auto;transform: scale(1.2)">
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="background: transparent;border-radius: 0;border-top: 5px solid white;border-bottom: 5px solid white;border-left: 2px dashed white;border-right: 2px dashed white;">
                            <img class="card-img-top" src="{{ asset('images/breakfast.png') }}" style="width: 60%;height: 60%;display: block;margin-left: auto;margin-right: auto;margin-top: 10px;">
                            <hr>
                            <div class="card-body">
                              <h5 class="card-title" style="color: white;font-weight:bold;text-align:center">Breakfast</h5>
                              <input type="radio" name="meal" id="" value="breakfast" style="display: block;margin-left: auto;margin-right: auto;transform: scale(1.2)">
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="background: transparent;border-radius: 0;border-top: 5px solid white;border-bottom: 5px solid white;border-left: 2px dashed white;border-right: 2px dashed white;">
                            <img class="card-img-top" src="{{ asset('images/breakfast.png') }}" style="width: 60%;height: 60%;display: block;margin-left: auto;margin-right: auto;margin-top: 10px;">
                            <hr>
                            <div class="card-body">
                              <h5 class="card-title" style="color: white;font-weight:bold;text-align:center">Half-Board</h5>
                              <input type="radio" name="meal" id="" value="half-board" style="display: block;margin-left: auto;margin-right: auto;transform: scale(1.2)">
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="background: transparent;border-radius: 0;border-top: 5px solid white;border-bottom: 5px solid white;border-left: 2px dashed white;border-right: 2px dashed white;">
                            <img class="card-img-top" src="{{ asset('images/breakfast.png') }}" style="width: 60%;height: 60%;display: block;margin-left: auto;margin-right: auto;margin-top: 10px;">
                            <hr>
                            <div class="card-body">
                              <h5 class="card-title" style="color: white;font-weight:bold;text-align:center">Full-Board</h5>
                              <input type="radio" name="meal" id="" value="full-board" style="display: block;margin-left: auto;margin-right: auto;transform: scale(1.2)">
                            </div>
                          </div>
                    </div>
                </div>
                
                <hr>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="checkin" style="color:white">Check-In :</label>
                            <input style="border-radius:0;" class="form-control" id="checkin" name="checkin" type="date">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="checkout" style="color:white">Check-Out :</label>
                            <input style="border-radius:0;" class="form-control" id="checkout" name="checkout" type="date">
                        </div>
                    </div>
                </div>
                

                @include('layouts.message')
                <button type="submit" class="mt-3 btn btn-dark"><i class="fa fa-save"></i>&nbsp;Reserve</button>
            </form>
        </div>
    </div>
</div>

@endsection
