@extends('layouts.admin.index-L')
@section('headTitle','treatment Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/jquery-1.10.2.js"></script>
    <script src="{{ asset('assets') }}/admin/js/pageJS/treatment.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/treatment.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.treatment.index') }}" class="btn btn-primary">Go to the List</a>
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
                                    <td>Category</td>
                                    <td>{{ \App\Http\Controllers\Admin\TreatmentController::getParentsTree($data->getCategory, $data->getCategory->title) }}</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>{{ $data->title }}</td>
                                </tr>
                                <tr>
                                    <td>Keywords</td>
                                    <td>{{ $data->keywords }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $data->description }}</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" />
                                        @else
                                            <label>No Image</label>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Detail</td>
                                    <td>{{ $data->detail }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>{{ $data->price }}</td>
                                </tr>
                                <tr>
                                    <td>Frequency</td>
                                    <td>{{ $data->frequency }}</td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td>{{ $data->duration }}</td>
                                </tr>
                                <tr>
                                    <td>Doctor Name</td>
                                    <td>{{ $data->getUser->name }}</td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td>{{ $data->duration }}</td>
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
