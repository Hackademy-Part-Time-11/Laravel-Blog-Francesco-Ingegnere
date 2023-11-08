<div>
    <h4 class="my-3">Elenco Utenti</h4>

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-end">
                        <button type="button" class="btn btn-sm btn-black" wire:click="edit({{$user->id}})">Modifica</button>
                        <button type="button" class="btn btn-sm btn-danger bg-danger" wire:click="delete({{$user->id}})">Elimina</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    
    </table>
</div>