<?php

namespace App\Http\Livewire\IdCard;

use App\Models\IdCard;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DeleteIdc extends Component
{

    public IdCard $idc;

    public function delete()
    {
        Storage::disk('avatars')->delete($this->idc->photo);
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
