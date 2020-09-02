@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Our Services</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{Form::open(['route' => 'orders.store', 'method' => 'POST' ])}}
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" value="Domain" type="checkbox" id="gridCheck" name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    Domain
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" value="Hosting" type="checkbox" id="gridCheck" name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    Hosting
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" value="EA" type="checkbox" id="gridCheck" name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    EA
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" value="vps" type="checkbox" id="gridCheck" name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    VPS
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" value="SEO" type="checkbox" id="gridCheck" name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    SEO
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="inputEmail4" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Address</label>
                                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="inputAddress"
                                       placeholder="Phone Number">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
