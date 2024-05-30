<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryComponent extends Component {
    use WithPagination;

    public $pageSize = 5;

    public $slug;
    public $orderBy = "Default Sorting";



    public function store($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added to Cart');
        return redirect()->route('shop.cart');
    }


    public function mount($slug) {
        $this->slug = $slug;
    }


    public function changeOrderBy($order) {
        $this->orderBy = $order;
    }



    public function render() {
        $category = Category::where('slug', $this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if ($this->orderBy == 'Liter: Low to High') {
            $products = Product::join("users", "users.id", "=", "products.user_id")->where("users.suspended", "=", 0)->where("users.published", "=", 1)->where('category_id', $category_id)->orderBy('liter', 'ASC')->paginate($this->pageSize, array('products.*'));
        } else if ($this->orderBy == 'Liter: High to Low') {
            $products = Product::join("users", "users.id", "=", "products.user_id")->where("users.suspended", "=", 0)->where("users.published", "=", 1)->where('category_id', $category_id)->orderBy('liter', 'DESC')->paginate($this->pageSize, array('products.*'));
        } else if ($this->orderBy == 'Sort By Newness') {
            $products = Product::join("users", "users.id", "=", "products.user_id")->where("users.suspended", "=", 0)->where("users.published", "=", 1)->where('category_id', $category_id)->orderBy('products.created_at', 'DESC')->paginate($this->pageSize, array('products.*'));
        } else {
            $products = Product::join("users", "users.id", "=", "products.user_id")->where("users.suspended", "=", 0)->where("users.published", "=", 1)->where('category_id', $category_id)->paginate($this->pageSize, array('products.*'));
        }


        $categories = Category::orderBy('name', 'ASC')->get();


        return view('livewire.category-component', ['products' => $products, 'categories' => $categories, 'category_name' => $category_name,]);
    }
}
