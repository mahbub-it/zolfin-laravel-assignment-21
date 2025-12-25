@extends('admin.master-admin')

@section('content')

    @include('admin.left-sidemenu')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <h4 class="card-title">Edit User</h4>
                            <hr>
                            <form class="forms-sample" method="POST" action="{{ route('users.update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Full name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Full name"
                                        value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label>User Photo</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" name="thumbnail" class="form-control file-upload-info"
                                            value="{{ $user->photo }}" placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="Email address" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" class="form-control" id="password"
                                        placeholder="Password" value="">
                                </div>

                                <div class="form-group">
                                    <label for="re-password">Re-write Password</label>
                                    <input type="text" name="password_confirmation" class="form-control" id="re-password"
                                        placeholder="Re-write Password" value="">
                                </div>

                                <button type=" submit" class="btn btn-success mr-2">Update User</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection('content')