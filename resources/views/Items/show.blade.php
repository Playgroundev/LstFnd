@extends('layouts.app')
@section('title','Lost Items')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-team">Lost Items</i>
                </div>
                <div class="panel-body">
                    @if($items->isEmpty())
                        <p>No items have been saved to the database</p>

                    @else
                        <table class="table">
                            <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Category</th>
                                <th>Item Name</th>
                                <th>Serial Number</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item => $value)
                                <tr>
                                    <td>{{$value->user_id}}</td>
                                    <td>{{$value->category}}</td>
                                    <td>{{$value->item_name}}</td>
                                    <td>{{$value->serial_number}}</td>
                                    <td>{{$value->description}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection