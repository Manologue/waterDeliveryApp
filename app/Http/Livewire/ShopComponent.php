<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class ShopComponent extends Component {
    use WithPagination;

    public $pageSize = 12;
    public $orderBy = "Default Sorting";


    public function store($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added to Cart');
        return redirect()->route('shop.cart');
    }


    public function changeOrderBy($order) {
        $this->orderBy = $order;
    }





    public function render() {

        if ($this->orderBy == 'Liter: Low to High') {
            $products = Product::join("users", "users.id", "=", "products.user_id")->where("users.suspended", "=", 0)->where("users.published", "=", 1)->orderBy('liter', 'ASC')->paginate($this->pageSize, array('products.*'));
        } else if ($this->orderBy == 'Liter: High to Low') {
            $products = Product::join("users", "users.id", "=", "products.user_id")->where("users.suspended", "=", 0)->where("users.published", "=", 1)->orderBy('liter', 'DESC')->paginate($this->pageSize, array('products.*'));
        } else if ($this->orderBy == 'Sort By Newness') {
            $products = Product::join("users", "users.id", "=", "products.user_id")->where("users.suspended", "=", 0)->where("users.published", "=", 1)->orderBy('products.created_at', 'DESC')->paginate($this->pageSize, array('products.*'));
        } else {
            $products = Product::join("users", "users.id", "=", "products.user_id")->where("users.suspended", "=", 0)->where("users.published", "=", 1)->paginate($this->pageSize, array('products.*'));
        }


        // dd($products);
        // $countProducts =  Product::count();


        $categories = Category::orderBy('name', 'ASC')->get();
        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories]);
    }
}
