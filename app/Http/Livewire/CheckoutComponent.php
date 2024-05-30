<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Order;
use App\Models\OrderSeller;
use App\Models\Report;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;




class CheckoutComponent extends Component {

    public $user_id = null;
    public $last_name;
    public $first_name;
    // = Auth::user() ? Auth::user()->email : null;
    public $company_name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $note;
    public $total_price;
    public $payment_status = 'cash on delivery';
    public $delivery_status = 'pending';
    public $seller_id;



    // public function updated($fields) {
    //     $this->validateOnly($fields, [
    //         'first_name' => 'required',
    //         'email' => 'required',
    //         'phone' => 'required',
    //         'address' => 'required',
    //         'city' => 'required'
    //     ]);
    // }

    public function cash_order() {
        // $this->validate([
        //     'first_name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'address' => 'required',
        //     'city' => 'required'

        // ]);


        $user = Auth::user();

        if ($user) {
            $this->user_id = $user->id;
        }


        $order = new Order();
        // $product = Product::find(Cart::
        // dd(Cart::total());

        $order->user_id = $this->user_id;
        $order->last_name = $this->last_name;
        $order->first_name = $this->first_name;
        $order->company_name = $this->company_name;
        $order->email = $this->email;
        $order->phone = $this->phone;
        $order->address = $this->address;
        $order->city = $this->city;
        $order->note = $this->note;
        $this->total_price = Cart::total();

        $order->total_price = $this->total_price;
        $order->payment_status = $this->payment_status;
        $order->delivery_status = $this->delivery_status;

        $order->save();


        $lastinsertedId = $order->id;


        foreach (Cart::content() as $item) {
            $report = new Report();


            $report->order_id = $lastinsertedId;
            $report->product_id = $item->id;
            $report->product_price = $item->model->price;
            $report->product_quantity = $item->qty;
            $report->product_name = $item->model->name;
            $report->product_image = $item->model->image;

            $report->save();


            $order_seller = new OrderSeller();
            $product = Product::find($item->id);

            $user_id = $product->user_id;
            $verify_user = OrderSeller::where('user_id', '=', $user_id)->where('order_id', '=', $lastinsertedId)->first();
            // dd($verify_user);

            if ($verify_user == false) {
                $order_seller->user_id = $user_id;
                $order_seller->order_id =  $lastinsertedId;
                $order_seller->save();
            }
        }



        Cart::destroy();


        redirect('/cart')->with('success_message', 'Congratulations you have sent your order successfully we will contact you very soon');
    }


    public function render() {


        // $this->first_name = Auth::user() ? Auth::user()->name : null;
        // $this->email = Auth::user() ? Auth::user()->email : null;

        return view('livewire.checkout-component');
    }
}
