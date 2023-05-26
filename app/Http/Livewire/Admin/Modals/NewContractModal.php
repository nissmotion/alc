<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\Equipment;
use Livewire\Component;

class NewContractModal extends Component
{
    public $newContractModal = true;
    public $step = 1;

    protected $listeners = ['openNewContractModal', 'refresh' => '$refresh'];

    public function openNewContractModal()
    {
        $this->dispatchBrowserEvent('body-lock');
        $this->newContractModal = true;
    }

    public function close()
    {
        $this->dispatchBrowserEvent('body-unlock');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.admin.modals.new-contract-modal', [
            'rentals' => Equipment::all(),
        ]);
    }
}
