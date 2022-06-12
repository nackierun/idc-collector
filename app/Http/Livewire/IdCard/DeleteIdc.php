<?php

namespace App\Http\Livewire\IdCard;

use App\Models\IdCard;
use Livewire\Component;

class DeleteIdc extends Component
{

    public IdCard $idc;

    public function delete()
    {
        $delete = $this->idc->delete();
        $this->dispatchBrowserEvent('deleted');

    }
    public function render()
    {
        return <<<'blade'
            <div>
                <button class="dropdown-item" wire:click="delete">Delete</button>
            </div>
        blade;
    }
}
