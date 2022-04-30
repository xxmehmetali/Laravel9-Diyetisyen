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
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add category
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6">

                                    <label>Parent Category :</label>
                                    <select name="parentId" class="form-control">
                                        <option value="0" selected="selected">Main Category</option>
                                    @foreach($data as $rs)
                                        <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                    @endforeach
                                    </select>

                                    <label>Title :</label>
                                    <input class="form-control" type="text" name="title">


                                    <label>Description :</label>
                                    <input class="form-control" type="text" name="description">

                                    <label>Image :</label>
                                    <input class="form-control" type="file" name="image">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Keywords [ Please seperate each keyword with comma ( , ) ]:</label>
                                    <textarea class="form-control" type="textarea" name="keywords"  rows="5"></textarea>

                                    <label>Status :</label> <br>
                                    <select class="form-control" name="status">
                                        <option value="Staged">Staged</option>
                                        <option value="Online">Online</option>
                                    </select>
                                </div>
                                <div style="margin-top:30px;"></div>
                                <button type="reset" class="btn btn-primary">Reset Form</button>
                                <button type="submit" class="btn btn-success save">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>

@endsection
