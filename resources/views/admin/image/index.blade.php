@extends('layouts.admin.imageGallery-L')
@section('headTitle','image Main Page')
@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="{{ asset('assets') }}/admin/js/dataTables/jquery.dataTables.js"></script>
    <link href="{{ asset('assets') }}/admin/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <script src="{{ asset('assets') }}/admin/js/pageJS/image.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/imageGallery.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.image.create', ['treatmentId' => $data->id]) }}" class="btn btn-primary">Add Image</a>
        </div>
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Images For => <h4 style="display: inline-block"> <label class="label label-primary">{{ $data->title }}</label></h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 80px">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 410px;">Title</th>
                                    <th class="sorting imgTextAlignCenter" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 227px;">Image</th>
                                 <!--   <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 162px;">Edit</th> -->
                                 <!--   <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 162px;">Delete</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 162px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data->getImages as $rs)
                                <tr>
                                    <td style="width: 8%">{{ $rs->id }}</td>
                                    <td style="width: 12%">{{Str::of($rs->title)->limit(25) }}</td>

                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" />
                                        @else
                                            <label class="labelTextAlignCenter">No Image</label>
                                        @endif

                                    </td>


                                    {{-- <td class="center"><a href="{{ route('admin.image.edit', ['id'=>$rs->id]) }}" class="btn btn-primary">Edit</a></td> --}}
                                    <td style="width: 8%" class="center"><a onclick="return confirm('Do you want to delete?')" href="{{ route('admin.image.destroy', ['id'=>$rs->id, 'treatmentId' => $data->id]) }}" class="btn btn-danger">Delete</a></td>
                                    {{-- <td class="center"><a href="{{ route('admin.image.show', ['id'=>$rs->id]) }}" class="btn btn-primary">Show</a></td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

@endsection
