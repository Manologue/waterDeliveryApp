<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Report;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserReportComponent extends Component {


    public $order_id = null;

    public function mount($order_id) {
        $this->order_id = $order_id;


        $check_user = Order::where('user_id', Auth::user()->id)->where('id', $this->order_id)->first();
        $order = Order::find($this->order_id);

        if (!$check_user) {
            return redirect()->route('user.dashboard');
        }

        if ($order->deleted_by_user == 1) {
            return redirect()->route('user.dashboard');
        }
    }
    public function render() {

        $reports = Report::where('order_id',  $this->order_id)->get();

        return view('livewire.user.user-report-component', ['reports' => $reports]);
    }
}
