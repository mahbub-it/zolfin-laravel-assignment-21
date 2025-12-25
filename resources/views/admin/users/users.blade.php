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
                            @if(session()->get('message'))
                                <div class="alert alert-success">
                                    {{session()->get('message')}}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col">
                                    <h2 style="font-size: 24px;" class="card-title">All Users</h2>

                                </div>
                                <div class="col-4">
                                    <form class="ml-auto search-form d-none d-md-block" method="GET"
                                        action="{{route('posts.index')}}">
                                        <div class="form-group">
                                            <input type="search" class="form-control" placeholder="Search from posts..."
                                                name="search" value="{{$keyword}}">
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> User id </th>
                                        <th> Thumbnail </th>
                                        <th> Name </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> <i class="mdi mdi-dots-horizontal"></i> </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users->all() as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td class="py-1">
                                                <img class="thumb-image"
                                                    src="{{ route('home') }}/storage/images/{{ $user->photo }}" alt="image" />
                                            </td>
                                            <td> {{ $user->name }} </td>
                                            <td> {{ $user->username }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td>
                                                <a class="btn btn-info" href="{{route('users.edit', $user->id)}}">Edit</a>
                                                <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class=" mt-2">
                                {{$users->links('vendor.pagination.bootstrap-5')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection('content')