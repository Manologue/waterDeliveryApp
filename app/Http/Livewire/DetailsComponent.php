<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Comment;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class DetailsComponent extends Component
{
    public $slug;
    public $comment;

    public $quantity = 1;



    public function mount($slug)
    {
        $this->slug = $slug;
        $product = Product::where('slug', $this->slug)->first();
        // dd($product->user->published);
        if ($product->user->published === 0 || $product->user->suspended === 1) {
            return redirect()->route('home.index');
        }
    }

    public function increaseQuantity()
    {
        $this->quantity++;
    }

    public function decreaseQuantity()
    {
        if ($this->quantity < 1) {
            $this->quantity = 0;
            return;
        }
        $this->quantity--;
    }


    public function store($product_id, $product_name, $product_price)
    {
        if ($this->quantity == 0) {
            session()->flash('failed', 'Please enter a quantity');
            return redirect()->route('product.details', ['slug' => $this->slug]);
        }
        Cart::add($product_id, $product_name, $this->quantity, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added to Cart');
        return redirect()->route('shop.cart');
    }
    public function addComment()
    {
        $this->validate([
            'comment' => 'required',

        ]);
        // dd($this->comment);
        $comment = new Comment();
        $product_comment = Product::where('slug', $this->slug)->first();

        $comment->comment = $this->comment;
        $comment->product_id = $product_comment->id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        $this->comment = null;
        session()->flash('message', 'comment added successfully');
    }



    public function render()
    {

        $product = Product::where('slug', $this->slug)->first();
        $rproducts = Product::where('category_id', $product->category_id)->where('slug', '!=', $product->slug)->inRandomOrder()->limit(3)->get();
        $categories = Category::orderBy('name', 'ASC')->get();
        $comments = Comment::where('product_id', $product->id)->where('blocked', 0)->orderBy('id', 'DESC')->get();

        return view('livewire.details-component', ['product' => $product, 'rproducts' => $rproducts, 'value_quantity' => $this->quantity, 'comments' => $comments]);
    }
}