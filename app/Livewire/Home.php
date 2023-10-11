<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.main')]
    public function render(): View
    {
        session()->put('url.intended', url()->current());

        return view('livewire.home');
    }
}
