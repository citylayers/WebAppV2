<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PlaceDetails extends Component
{
    public $search = '';


    public function render()
    {
        return view('livewire.place-details');
    }
}
