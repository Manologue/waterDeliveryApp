<?php

namespace App\Http\Livewire\Admin;

// use PDOException;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
        ]);
    }

    public function storeCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',

        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('img', $imageName);
        $category->image = $imageName;

        try {
            $category->save();
            session()->flash('message', 'category added successfully');
        } catch (\Exception $e) {
            session()->flash('failure', 'category may be duplicated please try again');
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('livewire.layouts.admin');
    }
}
