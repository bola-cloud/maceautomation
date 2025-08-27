<?php

namespace App\Livewire\User;

use Livewire\Component;

class RetrofitComponent extends Component
{
    public function render()
    {
        return view('livewire.user.retrofit-component')->layout("layouts.user");
    }
}
