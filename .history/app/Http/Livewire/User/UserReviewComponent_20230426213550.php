<?php

namespace App\Http\Livewire\User;

use App\Models\OrderItem;
use Livewire\Component;

class UserReviewComponent extends Component
{
    public $order_item_id;


    public function mount($order_item_id)
    {
        $this->order_item_id = $order_item_id;
    }

    public function render()
    {
        $orderItem = OrderItem::find($this->order_item_id);
        return view('livewire.user.user-review-component',[
            'order_item' => $orderItem
        ])->layout('layouts.base');
    }
}
