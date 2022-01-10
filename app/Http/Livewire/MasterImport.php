<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class MasterImport extends Component
{
    public $data_pegawais;

    public function render()
    {
        $this->data_pegawais = Session::get('data');
        return view('livewire.master-import');
    }
}
