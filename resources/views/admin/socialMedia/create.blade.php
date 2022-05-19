@extends('layouts.admin.index-L')
@section('headTitle','socialMedia Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/pageJS/socialMedia.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/socialMedia.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.socialMedia.index') }}" class="btn btn-primary">Go to the List</a>
        </div>
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add socialMedia
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.socialMedia.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <label>Social Media Name :</label>
                                <input class="form-control" type="text" name="name">

                                <label>Link :</label>
                                <input class="form-control" type="text" name="link">

                                <div style="margin-top:30px;"></div>
                                <button type="reset" class="btn btn-primary">Reset Form</button>
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
