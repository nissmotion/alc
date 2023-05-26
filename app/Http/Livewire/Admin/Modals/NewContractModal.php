<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\Equipment;
use Livewire\Component;

class NewContractModal extends Component
{
    public $newContractModal = true;
    public $step = 1;
    public $agree = [];
    public $showNextButton = false;
    public $name, $phone, $address, $city, $state, $zip, $equipment_id;

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

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zip' => 'required',
        'equipment_id' => 'required',
    ];

    public function emailContract()
    {
        dd('emailed');
    }

    public function updatedStep()
    {

        $test = $this->validate();
        dd($test);
        if ($this->step === 'complete') {
            dd('finished');
        }
        $this->agree[$this->step] = false;
        $this->updatedAgree($this->step, $this->agree[$this->step]);
    }

    public function updatedAgree($key, $value)
    {
        if ($this->step == $key && $value) {
            $this->showNextButton = true;
        } else {
            $this->showNextButton = false;
        }
    }


    public function render()
    {
        return view('livewire.admin.modals.new-contract-modal', [
            'rentals' => Equipment::all(),
        ]);
    }
}
