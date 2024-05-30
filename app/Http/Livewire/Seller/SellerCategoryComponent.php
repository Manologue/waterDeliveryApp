<?php

namespace App\Http\Livewire\Seller;

use Livewire\Component;
use App\Models\Category;

class SellerCategoryComponent extends Component {
    public $category_id;

    public function render() {
        $categories = Category::orderBy('name', 'ASC')->paginate(6);
        return view('livewire.seller.seller-category-component', ['categories' => $categories])->layout('livewire.layouts.seller');
    }
}
