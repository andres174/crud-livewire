<div>
    <div>
        @include("livewire.$view")
    </div>
    <div>
        <div>
            <table>
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Acción</th>
                   
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tipos as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Tipo }}</td>
                            <td>{{ $item->estado }}</td>
                            
                            <td>
                                <button type="button" wire:click='edit({{ $item->id }})'>Editar</button>
                            </td>
                            <td>
                                <button type="button" wire:click='destroyL({{ $item->id }})'>Borrar (lógico)</button>
                            </td>
                            <td>
                                <button type="button" wire:click='destroyF({{ $item->id }})'>Borrar (físico)</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
