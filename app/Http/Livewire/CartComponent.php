<?php

namespace App\Http\Livewire;

use Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Exceptions\InvalidRowIDException;

class CartComponent extends Component {

    public function increaseQuantity($rowId) {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    public function decreaseQuantity($rowId) {
        try {
            $product = Cart::get($rowId);
        } catch (InvalidRowIDException $e) {
            return false;
        }
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }
    public function clearAll() {
        Cart::destroy();
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }
    public function destroy($id) {
        Cart::remove($id);
        $this->emitTo('cart-icon-component', 'refreshComponent');
        session()->flash('success_message', 'Item deleted successfully');
    }

    public function render() {
        return view('livewire.cart-component');
    }
}
