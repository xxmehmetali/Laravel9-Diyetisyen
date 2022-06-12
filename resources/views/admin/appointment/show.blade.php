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
            <a href="{{ route('admin.appointment.index') }}" class="btn btn-primary">Go to the List</a>
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
                                    <td>id</td>
                                    <td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <td>orderId</td>
                                    <td>{{ $data->orderId }}</td>
                                </tr>
                                <tr>
                                    <td>appointmentDate</td>
                                    <td>{{ $data->appointmentDate }}</td>
                                </tr>
                                <tr>
                                    <td>weight</td>
                                    <td>{{ $data->weight }}</td>
                                </tr>
                                <tr>
                                    <td>pulseRate</td>
                                    <td>{{ $data->pulseRate }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $data->status }}</td>
                                </tr>
                                <tr>
                                    <td>doctorNote</td>
                                    <td>{{ $data->doctorNote }}</td>
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
