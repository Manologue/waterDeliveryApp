<?php

namespace App\Http\Livewire\Seller;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SellerEditProductComponent extends Component {
    use WithFileUploads;

    public $product_id;
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
    public $newimage;


    public function mount($product_id) {
        $product = Product::find($product_id);

        if (!$product) {
            return redirect()->route('seller.products')->with('failure', 'product not found');
        }
        if ($product->user_id !== Auth::user()->id) {
            return redirect()->route('seller.products')->with('failure', 'product not found');
        }

        // dd($product->description);

        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->sku = $product->SKU;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->liter = $product->liter;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
    }

    public function generateSlug() {
        $this->slug = Str::slug($this->name);
    }

    public function updateProduct() {
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
        $product = Product::find($this->product_id);
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
        if ($this->newimage) {

            unlink('assets/img/' . $product->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('img', $imageName);
            $product->image = $imageName;
        }
        $product->category_id = $this->category_id;

        try {
            $product->save();
            session()->flash('message', 'Product updated successfully');
        } catch (\Exception $e) {
            session()->flash('failure', 'category may be duplicated please try again');
        }
    }


    public function render() {
        $categories = Category::orderBy('name', 'ASC')->get();

        return view('livewire.seller.seller-edit-product-component', ['categories' => $categories])->layout('livewire.layouts.seller');
    }
}
