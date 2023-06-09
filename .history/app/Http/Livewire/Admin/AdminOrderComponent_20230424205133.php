<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class AdminOrderComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate();
        return view('livewire.admin.admin-order-component',[
            'orders' => $orders
        ])->layout("layouts.base");
    }
}
