<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;


class UserDashboardComponent extends Component {
    use WithPagination;

    public $order_id;

    public function deleteOrder() {
        $order = Order::find($this->order_id);
        $order->deleted_by_user = 1;
        $order->save();
        session()->flash('message', 'Order deleted successfully!');
    }

    public function cancelOrder() {
        $order = Order::find($this->order_id);
        if ($order->delivery_status == 'cancelled') {
            session()->flash('failure', 'Order was already cancel!');
            return;
        }
        if ($order->delivery_status == 'completed') {
            session()->flash('failure', 'Order is already complete!');
            return;
        }
        $order->delivery_status = "cancelled";
        $order->save();
        session()->flash('message', 'Order cancelled successfully!');
    }


    public function render() {

        $orders = Order::orderby('id', 'DESC')->where('deleted_by_user', '=', 0)->where('user_id', Auth::user()->id)->paginate(6);
        // dd($orders);
        return view('livewire.user.user-dashboard-component', ['orders' => $orders]);
    }
}
