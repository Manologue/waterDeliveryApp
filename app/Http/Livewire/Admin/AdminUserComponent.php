<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminUserComponent extends Component {
    use WithPagination;

    public function render() {

        $customers = User::orderby('id', 'DESC')->where('utype', '=', 'USR')->paginate(4);
        return view('livewire.admin.admin-user-component', ['customers' => $customers])->layout('livewire.layouts.admin');
    }
}
