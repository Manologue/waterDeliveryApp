<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;


class AdminProductComponent extends Component {
    use WithPagination;

    public $product_id;
    public $user_id;

    public function deleteProduct() {
        $product = Product::find($this->product_id);
        unlink('assets/img/' . $product->image);
        $product->delete();
        session()->flash('message', 'Product deleted successfully!');
    }

    public function render() {
        $this->user_id = Auth::user()->id;
        $products = Product::orderBy('created_at', 'DESC')->paginate(6);

        return view('livewire.admin.admin-product-component', ['products' => $products])->layout('livewire.layouts.admin');
    }
}
