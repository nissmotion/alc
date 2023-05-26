<?php

namespace App\Http\Livewire\Admin\Modals;

use App\Models\Contract;
use Livewire\Component;
use App\Models\Equipment;
use Illuminate\Validation\Validator;

class NewContractModal extends Component
{
    public $newContractModal = true;
    public $step = 1;
    public $agree = [];
    public $showNextButton = false;
    public $showEmailButton = false;
    public $name, $phone, $email, $address, $city, $state, $zip, $equipment_id;
    public $start_date;
    public $end_date;
    public $additional_notes;
    public $rate;
    public $term;
    private $equipment;
    public $equipmentOptions = [];
    public $selected_term;

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
        'rate' => 'required',
        'term' => 'required',
    ];

    public function emailContract()
    {
        // dd('not implemented yet');
    }

    public function startEquipmentSelect()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);
        $this->step++;
    }

    public function startContract()
    {
        $this->validate([
            'equipment_id' => 'required',
            'rate' => 'required',
            'term' => 'required',
        ]);
        $this->step++;
    }

    public function updatedStep()
    {

        if ($this->step === 'complete') {
            //create new contract here
            $this->validate();

            $equipment = Equipment::find($this->equipment_id);

            $newContract = Contract::create([
                'start_date'        => $this->start_date,
                'end_date'          => $this->end_date,
                'name'              => $this->name,
                'address'           => $this->address,
                'city'              => $this->city,
                'state'             => $this->state,
                'zip'               => $this->zip,
                'email'             => $this->email,
                'phone'             => $this->phone,
                'rate'              => $this->rate,
                'term'              => $this->term,
            ]);

            if (!empty($newContract->email)) {
                $this->showEmailButton = true;
            }
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

    public function updatedEquipmentId()
    {
        $this->equipment = Equipment::findOrFail($this->equipment_id);
        $this->equipmentOptions['Daily'] = $this->equipment->daily_price / 100;
        $this->equipmentOptions['Daily (We Dump)'] = $this->equipment->daily_we_dump_price / 100;
        $this->equipmentOptions['Weekly'] = $this->equipment->weekly_price / 100;
        $this->equipmentOptions['Monthly'] = $this->equipment->monthly_price / 100;
    }

    public function updatedSelectedTerm($key, $value)
    {
        $this->rate = $this->equipmentOptions[$this->selected_term];
        $this->term = $this->selected_term;
    }

    public function render()
    {
        return view('livewire.admin.modals.new-contract-modal', [
            'rentals' => Equipment::all(),
        ]);
    }
}
