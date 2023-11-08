
<div class="p-3 rounded shadow-sm">
    <h4>{{ $userId ? 'Modifica Utente' : 'Crea un nuovo utente'}}</h4>

    <x-success />

    <form wire:submit.prevent="store" class="mt-3">
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome Utente</label>
                <input type="text" name="name" id="name" class="form-control" wire:model="name">
                @error('name') <span class="small text-danger">{{$message}}</span> @enderror
            </div>
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" wire:model.blur="email">
                @error('email') <span class="small text-danger">{{$message}}</span> @enderror
            </div>
            <div class="col-12">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" wire:model.live.debounce.1500ms="password">
                @error('password') <span class="small text-danger">{{$message}}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-black">{{ $userId ? 'Modifica Utente' : 'Crea Utente'}}</button>
                @if($userId)
                    <button type="button" class="btn btn-black" wire:click="resetUser">Nuovo Utente</button>
                @endif
            </div>
        </div>
    </form>

</div>