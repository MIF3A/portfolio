<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use Livewire\WithPagination;

class SillsComponent extends Component
{
    use WithPagination;
    public $search;
    public $perPage=5;
    public function render()
    {
        $skills = skill::search($this->search)->paginate($this->perPage);
        return view('livewire.backend.sills-component', compact('skills'));
    }
}
