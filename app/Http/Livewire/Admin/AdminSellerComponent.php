<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSellerComponent extends Component {
    use WithPagination;

    public function render() {

        $sellers = User::orderby('id', 'DESC')->where('utype', '=', 'SEL')->paginate(4);

        return view('livewire.admin.admin-seller-component', ['sellers' => $sellers])->layout('livewire.layouts.admin');
    }
}
