@extends('layouts.admin.index-L')
@section('headTitle','message Create')
@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/jquery-1.10.2.js"></script>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    Details
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table showTable">
                            <tbody>
                                <tr>
                                    <td>Id</td>
                                    <td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{ $data->phone }}</td>
                                </tr>
                                <tr>
                                    <td>General Subject</td>
                                    <td>{{ $data->getMessageSubject->generalSubject }}</td>
                                </tr>
                                <tr>
                                    <td>Subject Title</td>
                                    <td>{{ $data->subjectTitle }}</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td style="white-space: pre-wrap;">{!! $data->message !!}</td>
                                </tr>
                                <tr>
                                    <td>IP</td>
                                    <td>{{ $data->ip }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $data->status }}</td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Updated At</td>
                                    <td>{{ $data->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Basic Table  -->
        </div>
    </div>

@endsection
