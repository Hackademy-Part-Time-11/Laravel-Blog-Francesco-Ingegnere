<x-layout-account>

    <x-slot:title>Login</x-slot>

        <div class="row mt-5">
            <div class="col-lg-4 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        ACCEDI
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                    @error('email')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    @error('email')
                                        <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-black my-3">Accedi</button>
                                    <a href="{{route('register')}}" class="d-block">Registrati</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</x-layout-account>