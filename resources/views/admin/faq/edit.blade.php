@extends('layouts.admin.index-L')
@section('headTitle','FAQ Create')

@section('pageInnerContent')

    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit FAQ
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="/admin/faq/update/{{$id}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Question :</label>
                                    <input class="form-control" type="text" name="question" placeholder="{{$data->question}}">

                                    <label>Answer :</label>
                                    <input class="form-control" type="text" name="answer" placeholder="{{$data->answer}}">

                                    <label>Status :</label> <br>
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option value="Staged">Staged</option>
                                        <option value="Online">Online</option>
                                    </select>
                                </div>

                                <div style="margin-top:30px;"></div>
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-primary">Reset Button</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>

@endsection