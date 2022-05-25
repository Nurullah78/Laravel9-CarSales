@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')

    <!-- Content Wrapper -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Add Category</h1>
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
                        Add Category form layout
                    </p>

                    <!-- Form Start -->
                    <form role="form" action="{{route('admin.category.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputTitle1">Title</label>
                            <label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Keywords</label>
                            <label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Description</label>
                            <label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" name="image"
                                       placeholder="Upload Image">
                                <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Status</label>
                            <label>
                                <select class="form-control" name="status">
                                    <option>Enable</option>
                                    <option>Disable</option>
                                </select>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Save</button>

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
