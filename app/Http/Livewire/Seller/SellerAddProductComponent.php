<?php

namespace App\Http\Livewire\Seller;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SellerAddProductComponent extends Component {

    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $price;
    public $sku;
    public $stock_status = 'instock';
    public $featured = 0;
    public $quantity;
    public $liter;
    public $image;
    public $category_id;

    public function generateSlug() {
        $this->slug = Str::slug($this->name);
    }

    public function addProduct() {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sku' => 'required',
            'stock_status' => 'required',
            'featured' => 'required',
            'quantity' => 'required',
            'liter' => 'required',
            'image' => 'required',
            'category_id' => 'required'
        ]);
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->SKU = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->liter = $this->liter;
        $product->category_id = $this->category_id;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('img', $imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->user_id = Auth::user()->id;

        try {
            $product->save();
            session()->flash('message', 'Product updated successfully');
        } catch (\Exception $e) {
            session()->flash('failure', 'product may be duplicated please try again');
        }
    }


    public function render() {
        $categories = Category::orderBy('name', 'ASC')->get();

        return view('livewire.seller.seller-add-product-component', ['categories' => $categories])->layout('livewire.layouts.seller');
    }
}
