<?php

namespace App\Http\Livewire;
use App\Models\Menu;
use App\Models\Outlet;
use Livewire\Component;

class Sales extends Component
{
    public $salesDetail = [];
    public $outlets = [];
    public $menus = [];

    public function mount()
    {
        $this->salesDetail = [ 
            ['menu_id' => '', 'qty' => '']
        ];
    }

    public function addMenu()
    {
        $this->salesDetail[] = ['menu_id' => '', 'qty' => ''];
    }

    public function removeMenu($index)
    {
        unset($this->salesDetail[$index]);
        $this->salesDetail = array_values($this->salesDetail);
    }
    
    public function render()
    {
        $this->outlets = Outlet::select('id', 'name')->orderBy('name', 'ASC')->get();
        $this->menus = Menu::select('id', 'name', 'menu_category_id', 'qty_stock','menu_info_id')
                            ->orderBy('name', 'ASC')->get();
        info($this->salesDetail);
        return view('livewire.sales');
    }
}
