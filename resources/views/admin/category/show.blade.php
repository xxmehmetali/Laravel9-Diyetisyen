@extends('layouts.admin.index-L')
@section('headTitle','category Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/pageJS/category.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/category.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Go to the List</a>
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
                                    <td>Parent Tree</td>
                                    <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</td>
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
