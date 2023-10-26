<x-layout>

    <x-slot:title>Login</x-slot>

    <div class="container">
        <h1 class="my-5">Library - Login</h1>

        <div class="row mt-5">
            <div class="col-lg-4 mx-auto">
                <div class="card shadow">
                    <div class="card-header text-center text-white bg-dark">
                        ACCEDI
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST">
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
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    @error('password')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-dark my-3">Accedi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        Clicca qui per <a href="{{route('register')}}" class="text-secondary">registrarti</a>
                    </div>
                </div>
            </div>
        </div>

    </div>




</x-layout>