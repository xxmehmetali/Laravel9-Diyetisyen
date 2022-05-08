@extends('layouts.admin.index-L')
@section('headTitle','treatment Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/pageJS/treatment.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/treatment.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.treatment.index') }}" class="btn btn-primary">Go to the List</a>
        </div>
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add treatment
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('admin.treatment.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6">
                                    <label>Title :</label>
                                    <input class="form-control" type="text" name="title">

                                    <label>Description :</label>
                                    <textarea name="description" class="form-control editor1"></textarea>

                                    <label>Image :</label>
                                    <input class="form-control" type="file" name="image">

                                    <label>Category :</label>
                                    <select name="categoryId" class="form-control">
                                        @foreach($allCategories as $rs)
                                                <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                        @endforeach
                                    </select>

                                    <label>Price :</label> <br>
                                    <input class="form-control" type="text" name="price">

                                    <label>Keywords :</label>
                                    <input class="form-control" type="text" name="keywords">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Detail :</label>
                                    <textarea name="detail" class="form-control editor2"></textarea>

                                    <label>Frequency :</label> <br>
                                    <input class="form-control" type="text" name="frequency">

                                    <label>Duration :</label> <br>
                                    <input class="form-control" type="text" name="duration">

                                    <label>Status :</label> <br>
                                    <select class="form-control" name="status">
                                        <option class="form-control" value="Staged">Staged</option>
                                        <option value="Online">Online</option>
                                    </select>

                                    <label>Doctor :</label> <br>
                                    <select class="form-control" name="userId">
                                        @foreach($doctors as $doctor)
                                            <option class="form-control" value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div style="margin-top:30px;"></div>
                                <button type="reset" class="btn btn-primary save">Reset Form</button>
                                <button type="submit" class="btn btn-success save">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '.editor1' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '.editor2' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );

    </script>
@endsection
