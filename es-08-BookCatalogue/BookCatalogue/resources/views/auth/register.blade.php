<x-layout>

    <x-slot:title>Register</x-slot>

    <div class="container">
        <h1 class="my-5">Library - Register</h1>

        <div class="row mt-5">
            <div class="col-lg-4 mx-auto">
                <div class="card shadow">
                    <div class="card-header text-center text-white bg-dark">
                        REGISTRATI
                    </div>
                    <div class="card-body">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="name">User Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                    @error('name')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                                    @error('email')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    @error('password')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password_confirmation">Conferma Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-dark my-3">Registrati</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        Clicca qui per <a href="{{route('login')}}" class="text-secondary">accedere</a>
                    </div>
                </div>
            </div>
        </div>

    </div>




</x-layout>