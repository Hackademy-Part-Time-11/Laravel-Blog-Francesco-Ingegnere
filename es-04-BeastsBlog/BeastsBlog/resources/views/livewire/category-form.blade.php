
<div class="p-3 rounded shadow-sm">
    <h4>{{ $categoryId ? 'Modifica categoria' : 'Crea una nuova categoria'}}</h4>

    <x-success />

    <form wire:submit.prevent="store" class="mt-3">
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome Categoria</label>
                <input type="text" name="name" id="name" class="form-control" wire:model="name">
                @error('name') <span class="small text-danger">{{$message}}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-black">{{ $categoryId ? 'Modifica Categoria' : 'Crea Categoria'}}</button>
                @if($categoryId)
                    <button type="button" class="btn btn-black" wire:click="resetCategory">Nuova Categoria</button>
                @endif
            </div>
        </div>
    </form>

</div>