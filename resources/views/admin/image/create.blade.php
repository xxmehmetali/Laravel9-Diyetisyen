@extends('layouts.admin.imageGallery-L')
@section('headTitle','image Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/pageJS/image.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/image.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.image.index', ['treatmentId' => $data->id]) }}" class="btn btn-primary">Go to the List</a>
        </div>
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add image
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.image.store', ['treatmentId' => $data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-12">

                                    <label>Title :</label>
                                    <input class="form-control" type="text" name="title">

                                    <label>Image :</label>
                                    <input class="form-control" type="file" name="image">

                                    <input class="hidden-input" name="treatmentId" value="{{ $data->id }}">

                                </div>
                                <div style="margin-top:30px;"></div>
                                <button type="reset" class="btn btn-primary save">Reset Form</button>
                                <button type="submit" class="btn btn-success save">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>

@endsection
