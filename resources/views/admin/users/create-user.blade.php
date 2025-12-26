@extends('admin.master-admin')

@section('content')

    @include('admin.left-sidemenu')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h4 class="card-title">Create New User</h4>
                            <hr>
                            <form class="forms-sample" method="POST" action="{{ route('users.store') }}"
                                enctype="multipart/form-data">

                                @csrf
                                <div class="form-group">
                                    <label for="name">Full name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Full name"
                                        value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label>User Photo</label>

                                    <div class="input-group col-xs-12">
                                        <input type="file" name="photo" class="" placeholder="Upload Image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email address" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" placeholder="Confirm Password">
                                </div>

                                <button type=" submit" class="btn btn-success mr-2">Create User</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection('content')