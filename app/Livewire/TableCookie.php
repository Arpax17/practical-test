<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CookieConsent;

class TableCookie extends Component
{
    public $cookies;
    public function mount()
    {
        $this->cookies = CookieConsent::all();
    }

    public function render()
    {
        return view('livewire.table-cookie');
    }
}
