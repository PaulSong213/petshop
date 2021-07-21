<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AddItem extends Component{

  public $formInputs = [];
  public $formName = "Form";
  public $saveRoute;

  public function render()
  {
      return view('livewire.add-item');
  }
}