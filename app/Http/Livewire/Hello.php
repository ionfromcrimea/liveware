<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hello extends Component
{
    public $name = 'Vlad';
    public $ok = false;
//    public $greeting = 'Goodbye!';
    public $greeting = ['Goodbye!'];

    public function render()
    {
        return view('livewire.hello');
//        return view('livewire.hello', [
//            'name' => 'Vlad',
//        ]);
    }
}
