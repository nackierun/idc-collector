<?php

namespace App\Http\Livewire\IdCard;

use App\Models\IdCard;
use App\View\Components\DefaultLayout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    public $confirming;

    public function render()
    {
        return view('livewire.id-card.index',['idcard' => IdCard::all()])->layout(DefaultLayout::class);
    }

}
