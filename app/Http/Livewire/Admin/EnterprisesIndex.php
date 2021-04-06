<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Enterprise;

use Livewire\WithPagination;

class EnterprisesIndex extends Component
{
    
    use WithPagination;

    // protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    
    public function render()
    {
        $enterprises = Enterprise::where('name','LIKE', '%' . $this->search . '%')
                                ->paginate(10);
        
        return view('livewire.admin.enterprises-index', compact('enterprises'));
    }
}
