<div>

    <div class="p-3">
        <div class="row">
            <div class="col-6">
                <input wire:model.live="search" type="text" class="form-control" placeholder="Cerca Utenti">
            </div>
            <div class="col-6">
                <ul>
                    @foreach ($users as $user)
                        <li class="border rounded list-unstyled ps-2 py-2 my-1">{{ $user->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    


    
</div>
