@extends('layouts.admin.index-L')
@section('headTitle','FAQ Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/pageJS/faq.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/faq.css">
@endsection


@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.faq.index') }}" class="btn btn-primary">Go to the List</a>
        </div>
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit FAQ
                </div>
                <div class="panel-body panelShow">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.faq.update', ['id'=>$id]) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Question :</label>
                                    <input class="form-control" type="text" name="question" placeholder="{{$data->question}}">

                                    <label>Answer :</label>
                                    <input class="form-control" type="text" name="answer" placeholder="{{$data->answer}}">

                                    <label>Status :</label> <br>
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option value="Staged">Staged</option>
                                        <option value="Online">Online</option>
                                    </select>
                                </div>

                                <div style="margin-top:30px;"></div>
                                <button type="reset" class="btn btn-default reset">Reset Form</button>
                                <button type="submit" href="/admin/faq/" class="btn btn-success save">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>

@endsection
