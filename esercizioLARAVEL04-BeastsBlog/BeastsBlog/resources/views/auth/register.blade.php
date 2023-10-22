<x-layout-account>

    <x-slot:title>Account</x-slot>


        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="card shadow">
                    <div class="card-header text-center text-white bg-black">
                        REGISTRATI
                    </div>
                    <div class="card-body">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="name">Nome Utente</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
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
                                    <button type="submit" class="btn btn-black">Registrati</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</x-layout-account>