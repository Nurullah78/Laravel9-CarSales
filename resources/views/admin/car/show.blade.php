@extends('layouts.adminbase')

@section('title', 'Show Category: '.$data->title)

@section('content')

    <!-- Content Wrapper -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-block btn-dark btn-sm"
                       style="width: 150px">Edit Category</a>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('admin.category.destroy',['id'=>$data->id])}}"
                       onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-block btn-danger btn-sm"
                       style="width: 150px">Delete Category</a>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">

            <!-- Default Box -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Data</h4>
                        <p class="card-description">
                            About Car <code>Table</code>
                        </p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">

                                <tr>
                                    <th style="width: 150px"> Id</th>
                                    <td> {{$data->id}} </td>
                                </tr>
                                <tr>
                                    <th> Title</th>
                                    <td> {{$data->title}} </td>
                                </tr>
                                <tr>
                                    <th> Keywords</th>
                                    <td> {{$data->keywords}} </td>
                                </tr>
                                <tr>
                                    <th> Image</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th> Status</th>
                                    <td> {{$data->status}} </td>
                                </tr>
                                <tr>
                                    <th> Created Date</th>
                                    <td> {{$data->created_at}} </td>
                                </tr>
                                <tr>
                                    <th> Update Date</th>
                                    <td> {{$data->updated_at}} </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

@endsection
