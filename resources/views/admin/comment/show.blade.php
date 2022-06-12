@extends('layouts.admin.index-L')
@section('headTitle','category Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/jquery-1.10.2.js"></script>
    <script src="{{ asset('assets') }}/admin/js/pageJS/category.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/category.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.comment.index') }}" class="btn btn-primary">Go to the List</a>
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
                                    <td>Subject</td>
                                    <td>{{ $data->subject }}</td>
                                </tr>
                                <tr>
                                    <td>Comment</td>
                                    <td>{{ $data->comment }}</td>
                                </tr>
                                <tr>
                                    <td>Rate</td>
                                    <td>{{ $data->rate }}</td>
                                </tr>
                                <tr>
                                    <td>Treatment</td>
                                    <td>{{ $data->getTreatment->title }}</td>
                                </tr>
                                <tr>
                                    <td>User</td>
                                    <td>{{ $data->getUser->name }}</td>
                                </tr>

                                <tr>
                                    <td>Ip</td>
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
