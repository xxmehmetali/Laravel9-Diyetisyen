@extends('layouts.admin.index-L')
@section('headTitle','user Create')

@section('customImports')
    <script src="{{ asset('assets') }}/admin/js/pageJS/user.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/user.css">
@endsection

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12 margin">
            <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Go to the List</a>
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
                                    <td>Roles</td>
                                    <td>
                                        @foreach($data->getRoles as $role)
                                            {{ $role->name }}
                                            <form method="POST" action="{{ route('admin.user.destroyRole', ['id'=>$data->id, 'role_id' => $role->id]) }}" style="display: inline-block">
                                                @csrf
                                                <input type="submit" value="Delete" style="font-size: 13px">
                                            </form>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Updated At</td>
                                    <td>{{ $data->updated_at }}</td>
                                </tr>
                                <tr>
                                    <form action="{{ route('admin.user.addRole', ['id'=>$data->id]) }}" method="post">
                                        @csrf
                                        <td>Add Role</td>
                                        <td>
                                            <select class="form-control" name="role_id">
                                                @foreach($roles as $role)
                                                   @if(!$data->getRoles->contains($role))
                                                        <option value="{{$role->id}}" selected="selected">{{ $role->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <input type="submit" value="Add Role">
                                        </td>
                                    </form>
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
