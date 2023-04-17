<?php

namespace App\Http\Livewire;
use app\Models\contact;
use Livewire\Component;

class Contactindex extends Component
{
    public $data;
    public function render()
    {
        $this->data = contact::latest()->get();
        return view('livewire.contactindex');
    }
}
