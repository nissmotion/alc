<?php

namespace App\Http\Livewire\Admin;

use App\Models\Equipment;
use Livewire\Component;

class EquipmentList extends Component
{
    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.admin.equipment-list', [
            'equipments' => Equipment::all(),
        ]);
    }
}
