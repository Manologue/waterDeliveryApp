<?php

namespace App\Http\Livewire\Seller;

use App\Models\Order;
use App\Models\Report;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderSeller;
use Illuminate\Support\Facades\Auth;

class SellerReportComponent extends Component {
    public $order_id = null;

    public function mount($order_id) {
        $this->order_id = $order_id;
        // dd($this->order_id);

        $order = OrderSeller::where('order_id', $this->order_id)->where('user_id', Auth::user()->id)->first();

        if (!$order) {
            return redirect()->route('seller.orders')->with('failure', 'Report not found');
        }

        if ($order->deleted_by_seller == 1) {
            return redirect()->route('seller.orders')->with('failure', 'Report not found');
        }
    }
    public function render() {

        $reports = [];

        $report_sellers = Report::where('order_id', $this->order_id)->get();

        // dd($report_sellers);

        foreach ($report_sellers as $item) {
            $verify_user = Product::where('id', '=', $item->product->id)->where('user_id', '=', Auth::user()->id)->first();
            if ($verify_user) {
                $reports[] = $item;
            }
        }

        // dd($reports[0]);


        return view('livewire.seller.seller-report-component', ['reports' => $reports])->layout('livewire.layouts.seller');
    }
}
