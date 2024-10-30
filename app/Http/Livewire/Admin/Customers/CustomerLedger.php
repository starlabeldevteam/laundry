<?php

namespace App\Http\Livewire\Admin\Customers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Translation;
use Carbon\Carbon;
use Livewire\Component;

class CustomerLedger extends Component
{
    public $data,$customer,$lang;
    public function render()
    {
        return view('livewire.admin.customers.customer-ledger');
    }

    public function mount($id)
    {
        if(session()->has('selected_language'))
        { /* if session has selected laugage*/
            $this->lang = Translation::where('id',session()->get('selected_language'))->first();
        }
        else{
            $this->lang = Translation::where('default',1)->first();
        }
        $this->data = collect();
        $this->customer = Customer::find($id);
        if(!$this->customer)
        {
            return abort(404);
        }
        $debits = collect(Order::where('customer_id',$this->customer->id)->get());
        foreach($debits as $row)
        {
            $row['date'] = $row['order_date'];
            $row['type'] = 'debit';
        }  
        $credits = collect(Payment::where('customer_id',$this->customer->id)->get());
        foreach($credits as $row)
        {
            $row['date'] = $row['created_at'];
            $row['type'] = 'credit';
        }   
        $this->data = $debits->concat($credits);
        $this->data = $this->data->toArray();
        usort($this->data,function ($a,$b) {
            return Carbon::parse($a['date'])->greaterThan(Carbon::parse($b['date'])) ;
        });
    }
}
