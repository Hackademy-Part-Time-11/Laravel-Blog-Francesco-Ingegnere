@if (session()->has('errorName'))
    <div class="alert alert-danger">
        {{session('errorName')}}
    </div>
    @elseif (session()->has('errorEmail'))
    <div class="alert alert-danger">
        {{session('errorEmail')}}
    </div>
    @elseif (session()->has('errorMessage'))
    <div class="alert alert-danger">
        {{session('errorMessage')}}
    </div>
@endif