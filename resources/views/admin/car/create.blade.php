@extends('layouts.adminbase')

@section('title', 'Add Car')

@section('content')

    <!-- Content Wrapper -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Add Car</h1>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">

            <!-- Default Box -->
            <div class="card">

                <div class="card-body">

                    <h3 class="card-title">Car Elements </h3>
                    <p class="card-description">
                        Add Car form layout
                    </p>

                    <!-- Form Start -->
                    <form role="form" action="{{route('admin.car.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputTitle1">Brand</label>
                            <label>
                                <input type="text" class="form-control" name="brand" placeholder="Brand">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Price</label>
                            <label>
                                <input type="number" class="form-control" name="price" value="0">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Series</label>
                            <label>
                                <input type="text" class="form-control" name="series" placeholder="Series">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Title</label>
                            <label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Product Year</label>
                            <label>
                                <input type="text" class="form-control" name="product_year" placeholder="product_year">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Color</label>
                            <label>
                                <input type="color" class="form-control" name="color" placeholder="color">
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Use Case</label>
                            <label>
                                <select class="form-control" name="use_case">
                                    <option>Second Hand</option>
                                    <option>New</option>
                                </select>
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTitle1">Description</label>
                            <label>
                                <textarea class="form-control" name="detail">

                                </textarea>
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
