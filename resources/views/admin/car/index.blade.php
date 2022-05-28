@extends('layouts.adminbase')

@section('title', 'Car List')

@section('content')

    <!-- Content Wrapper -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{route('admin.car.create')}}" class="btn btn-block btn-success btn-sm"
                       style="width: 200px">Add Car</a>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">

            <!-- Default Box -->
            <div class="card">

                <div class="card-body">

                    <h4 class="card-title">Car List</h4>
                    <p class="card-description">
                        All Cars <code>Table</code>
                    </p>

                    <div class="table-responsive">

                        <table class="table">

                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Series</th>
                                <th>Title</th>
                                <th>Product Year</th>
                                <th>Color</th>
                                <th>Use Case</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{AdminCarController::getParentsTree($rs,$rs->title)}}</td>
                                    <th>{{$rs->brand_id}}</th>
                                    <th>{{$rs->price}}</th>
                                    <th>{{$rs->series}}</th>
                                    <td>{{$rs->title}}</td>
                                    <th>{{$rs->product_year}}</th>
                                    <th>{{$rs->fuel_type}}</th>
                                    <th>{{$rs->color}}</th>
                                    <th>{{$rs->use_case}}</th>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px" alt="">
                                        @endif

                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.car.edit',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-info btn-fw">Edit</a></td>
                                    <td><a href="{{route('admin.car.destroy',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-danger btn-fw"
                                           onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                    <td><a href="{{route('admin.car.show',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-success btn-fw">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->

    </div>
@endsection
