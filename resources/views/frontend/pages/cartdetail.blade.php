@extends('frontend.layouts.master')
@section('content')
    <section style="padding: 10px 50px 50px 50px;" class="checkout-container">
        <div class="row">
            <div class="col-md-8">
                <div class="checkout-heading">
                    <h4 style="color: #383e5c;">Checkout</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for=""> name*</label>
                        <input type="text" value="{{ Auth::user()->name }}" class="form-control"
                            style="margin-bottom: 10px;">
                        <label for="">Email*</label>
                        <input type="email" value="{{ Auth::user()->email }}" class="form-control"
                            style="margin-bottom: 10px;">
                    </div>
                    <div class="col-md-6">

                        <label for="">Phone*</label>
                        <input type="text" placeholder="Phone" class="form-control" style="margin-bottom: 10px;">
                    </div>
                </div>
                <label for="">Address*</label>
                <input type="text" value="{{ Auth::user()->address }}" class="form-control" style="margin-bottom: 10px;">

                {{--  <div class="row">
                    <div class="col-md-6">
                        <label for="">Postal Code/Zip</label>
                        <input type="text" placeholder="Postal Code/Zip" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Country*</label>
                        <select name="" id="" class="form-control">
                            <option value="">Nepal</option>
                        </select>
                    </div>
                </div>  --}}
            </div>
            <div class="col-md-4">
                <div class="cart-total-heading" style="border-bottom: 1px solid gray;">
                    <h4 style="color:orange; margin-bottom: 10px;">Cart Total</h4>
                </div>
                <div class="row">
                    @php
                        $subtotal = 0;
                    @endphp

                    <div class="col-md-6" style="padding-top: 20px; padding-bottom: 20px; text-align:center;">
                        <span>Cart Subtotal:</span>
                    </div>
                    <div class="col-md-6" style="padding-top: 20px; padding-bottom: 20px; text-align:center;">
                        <span>Rs.4000.00</span>
                    </div>
                </div>

                <div class="shipping" style="padding: 20px 0;">
                    <h4 style="color: orange; border-bottom: 1px solid gray; padding-bottom: 10px; margin-bottom: 20px;">
                        Shipping Charge</h4>
                    @php
                        $shippingcat = App\Models\shipping::all();
                    @endphp

                    <select name="" id="" class="form-control">
                        <option value="">Select your area</option>
                        @foreach ($shippingcat as $shipping)
                            <option value="{{ $shipping->id }}">{{ $shipping->address }}(Rs. {{ $shipping->price }})
                            </option>
                        @endforeach
                        <option value="">Out off Kathmandu-Not Available: Rs.0.00</option <option value="">
                        Kathmandu: Rs.100.00</option>
                    </select>
                    <div class="row">
                        <div class="col-md-6" style="text-align: center; padding-top: 10px;">
                            <span>Total</span>
                        </div>
                        <div class="col-md-6" style="text-align: center; padding-top: 10px;">
                            <span>:Rs.4,700.00</span>
                        </div>
                    </div>
                </div>
                <div class="payments" style=" margin-bottom: 20px;">
                    <h4 style="color: orange; border-bottom: 1px solid gray; padding-bottom: 10px;">
                        Payments</h4>
                    <select name="" id="" class="form-control" style=" margin-top: 20px;">
                        <option value="">Cash on Delivery</option>
                    </select>
                </div>
                <div class="checkout-btn" style="text-align: center;">
                    <button
                        style="background-color: red; color: #fff; border: none; border-radius: 5px; padding: 5px 30px;">Proceed
                        to
                        Checkout</button>
                </div>

            </div>
        </div>
    </section>
@endsection
