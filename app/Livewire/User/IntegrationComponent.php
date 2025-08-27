<?php

namespace App\Livewire\User;

use Livewire\Component;

class IntegrationComponent extends Component
{
    public function render()
    {
        return view('livewire.user.integration-component')->layout("layouts.user");
    }
}
