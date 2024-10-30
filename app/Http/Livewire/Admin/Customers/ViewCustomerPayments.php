<?php

namespace App\Http\Livewire\Admin\Customers;

use App\Models\Payment;
use Livewire\Component;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Translation;

class ViewCustomerPayments extends Component
{
    public $payments = [],$customer,$invoice_amount,$invoice_count,$payment,$orders,$balance,$lang;
    /* render the page */
    public function render()
    {
        return view('livewire.admin.customers.view-customer-payments');
    }
      /* process before render */
      public function mount($id)
      {
          $this->customer = Customer::find($id);
          if (!($this->customer)) {
              abort(404);
          }
          if(session()->has('selected_language'))
          { /* if session has selected laugage*/
              $this->lang = Translation::where('id',session()->get('selected_language'))->first();
          }
          else{
              $this->lang = Translation::where('default',1)->first();
          }
          $this->invoice_amount = Order::where('customer_id', $id)->sum('total');
          $this->invoice_count = Order::where('customer_id', $id)->count();
          $this->payment = Payment::where('customer_id', $id)->sum('received_amount');
          $this->orders = Order::where('customer_id', $id)->latest()->get();
          $this->balance = $this->invoice_amount - $this->payment;
          $this->payments = Payment::where('customer_id', $id)->latest()->get();
      }
}
