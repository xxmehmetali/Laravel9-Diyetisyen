@extends('layouts.admin.index-L')
@section('headTitle','setting Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/pageJS/setting.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/setting.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.setting.index') }}" class="btn btn-primary">Go to the List</a>
        </div>
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add setting
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.setting.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <label>Setting Name (Key) :</label>
                                <input class="form-control" type="text" name="settingName" placeholder="Setting Name">

                                <label>Status :</label> <br>
                                <select class="form-control" name="status">
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
