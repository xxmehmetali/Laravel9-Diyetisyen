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
                                    <td>Property Name (Key)</td>
                                    <td>{{ $data->key }}</td>
                                </tr>
                                <tr>
                                    <td>Value</td>
                                    <td>{{ $data->value }}</td>
                                </tr>
                                <tr>
                                    <td>Setting</td>
                                    <td>{{ $data->getSetting->settingName }}</td>
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
