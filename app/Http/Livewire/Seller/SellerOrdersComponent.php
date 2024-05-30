<?php

namespace App\Http\Livewire\Seller;

use App\Models\Order;
use Livewire\Component;
use App\Models\OrderSeller;
use Illuminate\Support\Facades\Auth;

class SellerOrdersComponent extends Component {
    public $order_id;

    public function deleteOrder() {

        $order = OrderSeller::where('user_id', Auth::user()->id)->where('order_id', $this->order_id)->first();
        // dd($order);
        $order->deleted_by_seller = 1;
        $order->save();
        session()->flash('message', 'Order deleted successfully!');
    }

    public function render() {
        $orders = [];

        $orders_seller = OrderSeller::orderby('id', 'DESC')->where('user_id', '=', Auth::user()->id)->where('deleted_by_seller', '=', 0)->get();

        foreach ($orders_seller as $item) {
            $orders[] = Order::where('id', $item->order_id)->paginate(1);
        }



        return view('livewire.seller.seller-orders-component', ['orders' => $orders])->layout('livewire.layouts.seller');
    }
}
