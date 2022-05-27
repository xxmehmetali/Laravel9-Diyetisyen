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
                                    <td>Social Media Name</td>
                                    <td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <td>Link</td>
                                    <td>{{ $data->link }}</td>
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
