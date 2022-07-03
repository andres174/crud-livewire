<?php

namespace App\Http\Livewire;
use App\Models\tipo_usuario;

use Livewire\Component;

class TipoUsuarioComponent extends Component
{
    public function render()
    {
        $tipos = tipo_usuario::all();
        return view('livewire.tipo-usuario-component', compact('tipos'));
    }

    public $view = 'ingresar';
    public $tipo, $tipo_id;

    public function guardar(){

        tipo_usuario::create([
            'Tipo' => $this->tipo,
            'estado' => 1
            
        ]);
        $this->reset();
    }

    public function edit($id){
        $tipos = tipo_usuario::find($id);

        $this->tipo_id = $id;
        $this->tipo = $tipos->tipo;
        

        $this->view = 'editar';
    }

    public function actualizar(){
        
        $tipos = tipo_usuario::find($this->tipo_id);
        $tipos->update([
            'Tipo' => $this->tipo
        ]);

        $this->reset();
    }

    public function destroyF($id){

        tipo_usuario::destroy($id);

    }

    public function destroyL($id){
        
        $tipos = tipo_usuario::find($id);
        $tipos->update([
            'estado' => 0
        ]);

        // solo fralta que no lo muestre
        

        $this->reset();
    }
}
