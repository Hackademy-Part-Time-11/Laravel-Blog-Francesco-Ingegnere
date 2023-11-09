<div>
    <h4 class="my-3">Elenco Categorie</h4>

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td class="text-end">
                        <button type="button" class="btn btn-sm btn-black" wire:click="edit({{$category->id}})">Modifica</button>
                        <button type="button" class="btn btn-sm btn-danger bg-danger" wire:click="delete({{$category->id}})">Elimina</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    
    </table>
</div>