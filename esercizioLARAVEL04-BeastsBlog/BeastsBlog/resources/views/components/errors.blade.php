@if (session()->has('errorName'))
    <div class="alert alert-danger">
        {{session('errorName')}}
    </div>
@endif