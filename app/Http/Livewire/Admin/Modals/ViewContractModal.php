<?php

namespace App\Http\Livewire\Admin\Modals;

use Livewire\Component;

class ViewContractModal extends Component
{
    public $viewContractModal = false;

    protected $listeners = ['openViewContractModal'];

    public function openViewContractModal()
    {
        $this->dispatchBrowserEvent('body-lock');
        $this->viewContractModal = true;
    }

    public function close()
    {
        $this->dispatchBrowserEvent('body-unlock');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.modals.view-contract-modal');
    }
}
