<div>

    <div class="p-3">
        <div class="row">
            <div class="col-6">
                <input wire:model.live="search" type="text" class="form-control" placeholder="Cerca Utenti">
            </div>
            <div class="col-6">
                <ul>
                    @foreach ($users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    


    
</div>
