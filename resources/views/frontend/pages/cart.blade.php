@extends('frontend.layouts.master')
@section('content')
    <section class="cart-details" style="padding: 10px 50px;">
        <div class="cart-heading-checkout" style="margin: 10px 0;">
            <div class="row">
                <div class="col-md-6">
                    <h3>Cart Details</h3>
                </div>
                <div class="col-md-6" style="text-align: end;">
                    <a href={{ route('subu.laptop') }}>
                        <button
                            style="background-color: red; color: #fff; border: none; border-radius: 5px; padding: 5px 10px;">Checkout
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 10px 0;">
            <div class="col-md-4">
                <span class="form-control" style="text-align:center; border: none !important;">Apply Voucher Code</span>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Your Voucher Code">
            </div>
            <div class="col-md-4">
                <button class="form-control bg-warning text-white button-click">Apply Voucher Code</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    {{--  <th scope="col">Size</th>
                    <th scope="col">Color</th>  --}}
                    <th scope="col">Price</th>
                    <th scope="col">sub_total_price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $subtotal = 0;
                    
                @endphp
                @foreach ($carts as $cart)
                    @if ($cart->product)
                        <tr>
                            <th scope="row">#{{ $cart->product ? $cart->product->id : '' }}</th>
                            <td>{{ $cart->product ? $cart->product->title : '' }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>{{ $cart->product->price }}</td>
                            @php
                                $subtotal += $cart->product->price * $cart->quantity;
                            @endphp
                            <td>{{ $cart->product->price * $cart->quantity }}</td>
                            <td>
                                {{--  <form action="{{ route('cart.delete', $cart->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn" type="submit">
                                        <span class="badge badge-primary"><i class="fa fa-trash"
                                                aria-hidden="true"></i></span>
                                    </button>
                                </form>  --}}
                            </td>
                        </tr>
                    @endif
                @endforeach

            </tbody>

        </table>
        <div class="total" style="text-align: end;">
            <span style="margin-right: 50px;">Total</span>
            <span>Rs.{{ $subtotal }}.00</span>
        </div>

    </section>
@endsection
