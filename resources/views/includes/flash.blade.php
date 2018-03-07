@if(session('status'))
    <div class="alert-success">
        {{session('status')}}
        <a href="{{url('/home')}}">Go Home</a>
    </div>
@endif
