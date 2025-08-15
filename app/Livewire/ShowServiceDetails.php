<?php

namespace App\Livewire;

use layout;
use App\Models\Service;
use Livewire\Component;

class ShowServiceDetails extends Component
{
    public $service;

    public function mount($id){
        $this->service = Service::findOrFail($id);
      
    }
    public function render()
    {
        return view('livewire.show-service-details',[
            'service' => $this->service
        ]);
    }
}
