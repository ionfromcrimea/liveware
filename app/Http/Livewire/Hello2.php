<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Hello2 extends Component
{

    public $name2 = 'Oleg';
    public $name3 = 'EGOR';

    public function resetName($name2 = "Default"){
        $this->name2 = $name2;
    }

    public function mount(Request $request, $name2){
//        $this->name2 = $name2; //'Andrey';
        $this->name2 = $request->input('name2', $name2);
    }

    public function updated7(){  // hydrate() не работает!
//        $this->name2 = 'Updated';
        $this->name2 = strtoupper($this->name2);
    }

    public function updatedName2($name2){
        $this->name2 = strtoupper($name2);
    }

    public function render(){
        return view('livewire.hello2');
    }
}
