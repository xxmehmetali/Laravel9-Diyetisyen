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
                    Add message
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.message.store') }}" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <label>Name :</label>
                                    <input class="form-control" type="text" name="name" placeholder="Name">

                                    <label>Email :</label>
                                    <input class="form-control" type="text" name="email" placeholder="Email">

                                    <label>Phone :</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Phone">

                                    <label>Subject :</label>
                                    <input class="form-control" type="text" name="subject" placeholder="Subject">

                                </div>
                                <div class="col-md-6">
                                        <label>Message :</label>
                                    <div class="control-group">
                                        <textarea class="form-control" name="message" placeholder="Açıklama" required="required" rows="5"></textarea>
                                    </div>

                                    <label>Status :</label> <br>
                                    <select class="form-control" name="status">
                                        <option value="Staged">Staged</option>
                                        <option value="Online">Online</option>
                                    </select>

                                    <input class="ip_hidden" name="ip">

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
