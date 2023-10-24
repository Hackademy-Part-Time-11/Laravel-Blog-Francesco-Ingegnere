<x-layout-account>

    <x-slot:title>Impostazioni</x-slot>

    <div class="card shadow">
        <div class="card-header text-white bg-black">
            <h1 class="text-center">Impostazioni</h1>
        </div>
        <div class="card-body">
        
                <x-success />
        
                <form action="{{route('account.settings.store')}}" method="POST">
        
                    @csrf

                    <div class="col-12 col-lg-6 mx-auto">
                        <label for="current_password">Password Attuale</label>
                        <input type="password" name="current_password" id="current_password" class="form-control">
                        @error('current_password', 'updatePassword')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mx-auto">
                        <label for="password">Nuova Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        @error('password', 'updatePassword')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mx-auto">
                        <label for="password_confirmation">Conferma Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        @error('password_confirmation', 'updatePassword')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 my-4 mx-auto">
                        <button class="btn btn-black" type="submit">Modifica</button>
                    </div>
        
                </form>
        </div>

    </div>

</x-layout-account>
