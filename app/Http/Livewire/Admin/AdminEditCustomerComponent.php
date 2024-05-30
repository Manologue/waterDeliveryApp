<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminEditCustomerComponent extends Component {

    public $suspended;
    public $customer_id;

    public function mount($customer_id) {
        $customer = User::where('id', $customer_id)->where('utype', 'USR')->first();
        if (!$customer) {
            return redirect()->route('admin.customers')->with('failure', 'Customer not found');
        }
        $this->suspended = $customer->suspended;
        $this->customer_id = $customer_id;
    }


    public function updateCustomer() {
        $customer = User::find($this->customer_id);
        $customer->suspended = $this->suspended;
        $customer->save();
        session()->flash('message', 'customer updated successfully');
    }

    public function render() {
        return view('livewire.admin.admin-edit-customer-component')->layout('livewire.layouts.admin');
    }
}
