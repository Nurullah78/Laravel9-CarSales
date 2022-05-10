@extends('layouts.adminbase')

@section('title', 'Edit Category: '.$data->title)

@section('content')

    <!-- Content Wrapper -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Edit Category: {{$data->title}}</h1>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">

            <!-- Default Box -->
            <div class="card">

                <div class="card-body">

                    <h3 class="card-title">Category Elements </h3>
                    <p class="card-description">
                        Edit Category form layout
                    </p>

                    <!-- Form Start -->
                    <form class="forms-sample" action="/admin/category/update/{{$data->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputTitle1">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$data->title}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Keywords</label>
                            <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$data->description}}">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" name="image" placeholder="Upload Image">
                                <label class="custom-file-label" for="exampleInputFile"></label>
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Status</label>
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>Enable</option>
                                <option>Disable</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Update</button>

                        <button class="btn btn-light">Cancel</button>

                    </form>
                    <!-- /.form -->

                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

@endsection
