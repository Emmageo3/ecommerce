<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FavoriteComponent extends Component
{
    public function render()
    {
        return view('livewire.favorite-component')->layout('layouts.base');
    }
}
