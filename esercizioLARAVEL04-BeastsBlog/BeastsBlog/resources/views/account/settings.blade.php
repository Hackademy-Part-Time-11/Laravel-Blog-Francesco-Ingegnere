<x-layout-account>

    <x-slot:title>Impostazioni</x-slot>

        <h1 class="mt-5">Impostazioni</h1>

        <x-success />

        <form action="{{route('account.settings.store')}}" method="POST">

            @csrf

            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="{{auth()->user()->name}}">
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
            <div class="col-12 my-3">
                <button class="btn btn-black" type="submit">Modifica</button>
            </div>

        </form>

</x-layout-account>
