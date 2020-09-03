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
                                <input class="form-check-input gridCheck" onclick="clickService(1)" data-price="10" value="Domain"
                                       type="checkbox" id="gridCheck-{{1}}"
                                       name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    Domain - $10
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input gridCheck" onclick="clickService(2)" data-price="8" value="Hosting"
                                       type="checkbox" id="gridCheck-{{2}}"
                                       name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    Hosting - $8
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input gridCheck" onclick="clickService(3)" data-price="12" value="EA"
                                       type="checkbox" id="gridCheck-{{3}}"
                                       name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    EA - $12
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input gridCheck" onclick="clickService(4)" data-price="15" value="VPS"
                                       type="checkbox" id="gridCheck-{{4}}"
                                       name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    VPS - $15
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input gridCheck" onclick="clickService(5)" data-price="20" value="SEO"
                                       type="checkbox" id="gridCheck-{{5}}"
                                       name="service[]">
                                <label class="form-check-label" for="gridCheck">
                                    SEO - $20
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="inputEmail4"
                                       placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="inputEmail4"
                                       placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Address</label>
                                <input type="text" name="address" class="form-control" id="inputAddress"
                                       placeholder="Address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="inputAddress"
                                       placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2" id="total-price">
                                <label for="inputEmail4">Total Price</label>
{{--                                <input type="text" name="total_price" class="form-control" id="input"--}}
{{--                                       placeholder="">--}}

                                <input class="form-control" id="input" type="text" placeholder="" readonly>

                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
            <h1>My Orders</h1>
            <tr>
                <th scope="col">Services</th>
                <th scope="col">Total Price</th>
            </tr>
            </thead>
            <tbody>
            {{--{{dd($orders)}}--}}
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->services}}</td>
                    <td>{{$order->total_price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>

        // function clickService(id) {
        //     let price = 0;
        //
        //     $("#gridCheck-" + id).change(function () {
        //         // let newPrice = price;
        //         price = $("#gridCheck-" + id).data('price');
        //         // console.log(price);
        //         $('#gridCheck option:selected').each(function () {
        //             price += Number($(this).data('price')); //get price of each selected option and add them to the newPrice
        //         });
        //
        //         $('#total-price').html(price); //display new price
        //     });
        //     // console.log(id);
        //
        // }

        $(':checkbox').change(function() {
            var total = 0;
            $(':checkbox:checked').each(function() {
                total = total + parseInt( $(this).data('price') );
            });

            $('#input').val(total);
            // $('#total-price').html(total);
            // console.log(total);
        });

    </script>
@endsection
