@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <p>
                       See Added <a href="{{url('all_items')}}">Items</a>
                   </p>
                    <p> Add Lost <a href="{{url('/add')}}">Items</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
