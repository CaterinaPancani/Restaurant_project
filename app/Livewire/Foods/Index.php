<?php

namespace App\Livewire\Foods;

use App\Models\Food;
use Livewire\Component;

class Index extends Component
{
    public $parametro;

    public function render()
    {
        $foods=Food::all();
        return view('livewire.foods.index',compact('foods'));
    }

    public function delete(Food $food){
        if($food->orders->count() > 0){
            session()->flash('warning', 'Ci sono ordini legati a questo piatto');
        } else {
            $food->delete();
            session()->flash('success', 'Piatto eliminato con successo.');
        }
    }


}
