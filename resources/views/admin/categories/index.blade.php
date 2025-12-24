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

                            <div class="row">
                                <div class="col">
                                    <h2 style="font-size: 24px;" class="card-title">Add new category</h2>
                                </div>
                            </div>

                            <div class="category-form">
                                <form action="">
                                    <input class="form-control mb-2" type="text" placeholder="Category name" />

                                    <button class="btn btn-primary" type="submit">Create category</button>
                                </form>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if(session()->get('message'))
                                <div class="alert alert-success">
                                    {{session()->get('message')}}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col">
                                    <h2 style="font-size: 24px;" class="card-title">All Categories</h2>

                                </div>
                                <div class="col-4">
                                    <form class="ml-auto search-form d-none d-md-block" method="GET"
                                        action="{{route('categories.index')}}">
                                        <div class="form-group">
                                            <input type="search" class="form-control"
                                                placeholder="Search from categories..." name="search" value="{{$keyword}}">
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Name </th>
                                        <th> <i class="mdi mdi-dots-horizontal"></i> </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categories->all() as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td> {{ $category->name }} </td>
                                            <td>
                                                <a class="btn btn-info"
                                                    href="{{route('categories.edit', $category->id)}}">Edit</a>
                                                <form action="{{route('categories.destroy', $category->id)}}" method="POST">
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
                                {{$categories->links('vendor.pagination.bootstrap-5')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection('content')