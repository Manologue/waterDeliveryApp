<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminEditSellerComponent extends Component {
    public $published;
    public $suspended;
    public $seller_id;




    public function mount($seller_id) {
        $seller = User::where('id', $seller_id)->where('utype', 'SEL')->first();
        if (!$seller) {
            return redirect()->route('admin.sellers')->with('failure', 'Seller not found');
        }
        $this->published = $seller->published;
        $this->suspended = $seller->suspended;
        $this->seller_id = $seller_id;
    }

    public function updateSeller() {

        $seller = User::find($this->seller_id);
        $seller->published = $this->published;
        $seller->suspended = $this->suspended;
        $seller->save();
        session()->flash('message', 'seller updated successfully');
    }

    public function render() {
        return view('livewire.admin.admin-edit-seller-component')->layout('livewire.layouts.admin');
    }
}
