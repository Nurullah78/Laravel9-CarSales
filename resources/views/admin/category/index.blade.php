@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

    <!-- Content Wrapper -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Category List</h1>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">

            <!-- Default Box -->
            <div class="card">

                <div class="card-body">

                    <h4 class="card-title">Category List</h4>
                    <p class="card-description">
                        All Categories <code>Table</code>
                    </p>

                    <div class="table-responsive">

                        <table class="table">

                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
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
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>{{$rs->description}}</td>
                                    <td>{{$rs->image}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="/admin/category/edit/{{$rs->id}}/" class="btn btn-block btn-info btn-fw">Edit</a></td>
                                    <td><a href="/admin/category/delete/{{$rs->id}}/" class="btn btn-block btn-danger btn-fw">Delete</a></td>
                                    <td><a href="/admin/category/show/{{$rs->id}}/" class="btn btn-block btn-success btn-fw">Show</a></td>
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
