<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoriesComponent extends Component {

    use WithPagination;
    public $category_id;

    public function deleteCategory() {
        $category = Category::find($this->category_id);
        unlink('assets/img/' . $category->image);
        $category->delete();
        session()->flash('message', 'Category deleted successfully!');
    }

    public function render() {
        $categories = Category::orderBy('name', 'ASC')->paginate(6);
        return view('livewire.admin.admin-categories-component', ['categories' => $categories])->layout('livewire.layouts.admin');
    }
}
