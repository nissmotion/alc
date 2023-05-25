<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\Equipment;
use Livewire\Component;

class AddEquipmentModal extends Component
{
    public $addEquipmentModal = false;

    public $description;
    public $additional_notes;
    public $daily_price;
    public $daily_we_dump_price;
    public $weekly_price;
    public $monthly_price;

    protected $listeners = ['openAddEquipmentModal'];

    public function openAddEquipmentModal()
    {
        $this->dispatchBrowserEvent('body-lock');
        $this->addEquipmentModal = true;
    }

    public function close()
    {
        $this->dispatchBrowserEvent('body-unlock');
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.admin.modals.add-equipment-modal');
    }

    protected $rules = [
        'description'           => 'required|string',
        'daily_price'           => 'required|integer',
        'daily_we_dump_price'   => 'required|integer',
        'weekly_price'          => 'required|integer',
        'monthly_price'         => 'required|integer',
    ];

    public function save()
    {
        $this->validate();

        $new = Equipment::create([
            'description'           => $this->description,
            'additional_notes'      => $this->additional_notes,
            'daily_price'           => $this->daily_price * 100,
            'daily_we_dump_price'   => $this->daily_we_dump_price * 100,
            'weekly_price'          => $this->weekly_price * 100,
            'monthly_price'         => $this->monthly_price * 100,
        ]);

        $this->emitTo('admin.equipment-list', 'refresh');
        $this->close();

    }
}
