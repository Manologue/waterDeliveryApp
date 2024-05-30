<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AdminOrdersComponent extends Component {

    use WithPagination;


    public $order_id;

    public function deleteOrder() {
        $order = Order::find($this->order_id);
        $order->deleted_by_admin = 1;
        $order->save();
        session()->flash('message', 'Order deleted successfully!');
    }


    public function render() {



        $orders = Order::orderby('id', 'DESC')->where('deleted_by_admin', '=', 0)->paginate(6);

        // dd($orders);

        return view('livewire.admin.admin-orders-component', ['orders' => $orders])->layout('livewire.layouts.admin');
    }
}
