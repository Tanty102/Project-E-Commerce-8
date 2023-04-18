<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    // Tăng số lượng sản phẩm ở giỏ hàng
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    // Giảm số lượng sản phẩm ở giỏ hàng
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    // Xoá sản phẩm ở giỏ hàng
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message','Item has been removed successfully');
    }

    // Xoá tất cả sản phẩm ở giỏ hàng
    public function destroyAll()
    {
        Cart::destroy();
    }


    public function render()
    {
        return view('livewire.cart-component')->layout("layouts.base");
    }
}
