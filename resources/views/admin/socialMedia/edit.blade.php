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
                    Edit socialMedia
                </div>
                <div class="panel-body panelShow">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.socialMedia.update', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label>Social Media Name :</label>
                                <input class="form-control" type="text" name="name" placeholder="{{$data->name}}">

                                <label>Link :</label>
                                <input class="form-control" type="text" name="link" placeholder="{{$data->link}}">

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
