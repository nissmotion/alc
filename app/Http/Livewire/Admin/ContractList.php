<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contract;

class ContractList extends Component
{
    public function render()
    {
        return view('livewire.admin.contract-list', [
            'contracts' => Contract::all(),
        ]);
    }
}
