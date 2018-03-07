@extends('layouts.app')
@section('title','Add Item')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Item</div>

                <div class="panel-body">
                    @include('includes.flash')
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/add')}}">
                        {!! csrf_field() !!}
                        <div class="form-group{{$errors->has('categories') ? 'has-error': ''}}">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category" required/>
                                @if($errors->has('categories'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('title')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{$errors->has('item_name') ? 'has-error': ''}}">
                            <label for="item_name" class="col-md-4 control-label">Item Name</label>

                            <div class="col-md-6">
                                <input id="item_name" type="text" class="form-control" name="item_name" required/>
                                @if($errors->has('item_name'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('item_name')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{$errors->has('serial_number') ? 'has-error': ''}}">
                            <label for="serial_number" class="col-md-4 control-label">Serial Number</label>
                            <div class="col-md-6">
                                <input id="serial_number" type="text" class="form-control" name="serial_number" required/>
                                @if($errors->has('serial_number'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('serial_number')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{$errors->has('description') ? 'has-error': ''}}">
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea rows="14" id="description" class="form-control" name="description" required></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <center>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i>Add Item
                                </button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection