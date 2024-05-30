<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class AdminEditCategoryComponent extends Component {
    use WithFileUploads;

    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newimage;


    public function mount($category_id) {
        $category = Category::find($category_id);
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->image = $category->image;
    }
    public function generateSlug() {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields) {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
        ]);
    }

    public function updateCategory() {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        if ($this->newimage) {
            unlink('assets/img/' . $category->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('img', $imageName);
            $category->image = $imageName;
        }
        try {
            $category->save();
            session()->flash('message', 'category updated successfully');
        } catch (\Exception $e) {
            session()->flash('failure', 'category may be duplicated please try again');
        }
    }
    public function render() {
        return view('livewire.admin.admin-edit-category-component')->layout('livewire.layouts.admin');
    }
}
