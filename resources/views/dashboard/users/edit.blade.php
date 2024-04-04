@extends('layouts.master')
@section('title')
    @lang('Edit Users')
@endsection
@section('css')
    <!--datatable css-->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!--datatable responsive css-->
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Users
        @endslot
        @slot('title')
            Create User
        @endslot
    @endcomponent

    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('status')}}
        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Create a new user</h5>
                    <a href="{{ route("users.index") }}" class="btn btn-sm btn-dark">Back</a>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <form action="{{ route("users.update",$user['id']) }}" method="POST" enctype="multipart/form-data" class="col-7">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" value="{{ $user['name'] }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                        name="email" value="{{ $user['email'] }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="">Profle Picture</label>
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" 
                                        name="avatar" >
                                    <input type="hidden" name="old_picture" value="{{ $user['avatar'] }}">
                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" 
                                        name="address" value="{{ $user['address'] }}">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="">User or Admin</label>
                                    <select name="is_admin" class="form-control">
                                        <option value="0" @if ($user['is_admin'] == 0) selected @endif >User</option>
                                        <option value="1" @if ($user['is_admin'] == 1) selected @endif >Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
