<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;


    public function render()
    {
        return view('livewire.contact-component')->layout("layouts.base");
    }
}
