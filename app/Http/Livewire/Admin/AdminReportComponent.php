<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Report;
use Livewire\Component;

class AdminReportComponent extends Component {
    public $order_id = null;

    public function mount($order_id) {
        $this->order_id = $order_id;

        $order = Order::find($this->order_id);

        if ($order->deleted_by_admin == 1) {
            return redirect()->route('admin.orders')->with('failure', 'Report not found');
        }
    }
    public function render() {

        $reports = Report::where('order_id',  $this->order_id)->get();
        // dd($this->order_id);

        return view('livewire.admin.admin-report-component', ['reports' => $reports])->layout('livewire.layouts.admin');
    }
}
