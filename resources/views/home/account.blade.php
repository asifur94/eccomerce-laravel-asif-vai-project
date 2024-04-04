@extends('home.layouts.master-layout')

@section('title')
    Your account Management
@endsection

@section('main-content')
    <div class="container mt-5">

        <div class="row">
            <div class="col-xxl-3">
                <div class="card mt-n5">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                <img src="@if (Auth::user()->avatar != '') {{ URL::asset('images/' . Auth::user()->avatar) }}@else{{ URL::asset('build/images/users/avatar-1.jpg') }} @endif"
                                    class="  rounded-circle avatar-xl img-thumbnail user-profile-image"
                                    alt="user-profile-image">
                                {{-- <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-camera-fill"></i>
                                        </span>
                                    </label>
                                </div> --}}
                            </div>
                            <h5 class="fs-16 mb-1">
                                @if (auth()->check())
                                    @php
                                        echo Auth::user()->name;
                                    @endphp
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <!--end card-->

            </div>
            <!--end col-->
            <div class="col-xxl-9">
                <div class="card mt-xxl-n5">
                    <div class="card-header items-center flex justify-between">
                        <p class="m-0">Personal Details</p>
                        <a class="btn btn-danger btn-sm" href="{{ route('logout') }}">LogOut</a>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="firstnameInput" class="form-label">First
                                        Name</label>
                                    <input type="text" readonly class="form-control" id="user_name"
                                        placeholder="Enter your firstname" value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="lastnameInput" class="form-label">Email Address</label>
                                    <input type="text" class="form-control" id="user_email"
                                        placeholder="Enter your lastname" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="phonenumberInput" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="user_address"
                                        placeholder="Enter your phone number" value="{{ Auth::user()->address }}">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="order_list_wrapper my-3">
                                <div class="order_title">
                                    <h3>Order List</h3>
                                </div>
                                @if (count($orders))
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Product Image</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $key => $order)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td><img width="70px" src="{{ $order->product->image }}" alt="Product Image"></td>
                                                    <td>
                                                        ${{ intval($order->qty) * intval($order->product->price) }}
                                                    </td>
                                                    <td>
                                                        @switch($order->status)
                                                            @case(0)
                                                                <span class="badge bg-warning">Pending</span>
                                                            @break

                                                            @case(1)
                                                                <span class="badge bg-success">Complete</span>
                                                            @break

                                                            @case(2)
                                                                <span class="badge bg-danger">Cancled</span>
                                                            @break

                                                            @default
                                                        @endswitch

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>You haven't any order yet. <a href="{{ route('home') }}">Do Shop</a></p>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>
@endsection
