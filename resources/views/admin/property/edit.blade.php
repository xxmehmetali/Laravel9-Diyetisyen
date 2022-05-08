@extends('layouts.admin.index-L')
@section('headTitle','property Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/pageJS/property.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/property.css">
@endsection


@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.property.index') }}" class="btn btn-primary">Go to the List</a>
        </div>
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit property
                </div>
                <div class="panel-body panelShow">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.property.update', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label>Property Name (Key) :</label>
                                <input class="form-control" type="text" name="key" placeholder="{{$data->key}}">

                                <label>Value :</label>
                                <input class="form-control" type="text" name="value" placeholder="{{$data->value}}">

                                <label>Setting :</label>
                                <select class="form-control" name="settingId">
                                    @foreach($settings as $rs)
                                        <option value="{{ $rs->id }}">{{ $rs->settingName }}</option>
                                    @endforeach
                                </select>

                                <label>Status :</label> <br>
                                <select class="form-control" name="status">
                                    <option value="{{$data->status}}" selected="selected">{{$data->status}}</option>
                                    <option value="Staged">Staged</option>
                                    <option value="Online">Online</option>
                                </select>

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
