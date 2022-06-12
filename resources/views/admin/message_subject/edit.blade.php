@extends('layouts.admin.index-L')
@section('headTitle','message Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/jquery-1.10.2.js"></script>
    <script src="{{ asset('assets') }}/admin/js/pageJS/common.js"></script>
    <script src="{{ asset('assets') }}/admin/js/pageJS/message.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/message.css">
@endsection


@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.message.index') }}" class="btn btn-primary">Go to the List</a>
        </div>
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit message
                </div>
                <div class="panel-body panelShow">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.message.update', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label>Name :</label>
                                    <input class="form-control" type="text" name="name" placeholder="{{ $data->name }}">

                                    <label>Email :</label>
                                    <input class="form-control" type="text" name="email" placeholder="{{ $data->email }}">

                                    <label>Phone :</label>
                                    <input class="form-control" type="text" name="phone" placeholder="{{ $data->phone }}">

                                    <label>Subject :</label>
                                    <input class="form-control" type="text" name="subject" placeholder="{{ $data->subject }}">

                                </div>
                                <div class="col-md-6">
                                    <label>Message :</label>
                                    <div class="control-group">
                                        <textarea class="form-control" name="message" placeholder="{{ $data->message }}" required="required" rows="5"></textarea>
                                    </div>

                                    <label>Status :</label> <br>
                                    <select class="form-control" name="status">
                                        <option value="Staged">Staged</option>
                                        <option value="Online">Online</option>
                                    </select>

                                    <div style="margin-top:30px;"></div>
                                    <button type="reset" class="btn btn-primary">Reset Form</button>
                                    <button type="submit" class="btn btn-success save">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>

@endsection
