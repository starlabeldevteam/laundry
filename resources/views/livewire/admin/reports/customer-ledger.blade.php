<div>
    <div class="row align-items-center justify-content-between mb-4">
        <div class="col">
            <h5 class="fw-500 text-white">{{$lang->data['ledger_report'] ?? 'Ledger Report'}}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header p-4">
                    <div class="row">
                        <div class="col-md-3">
                            <label>{{$lang->data['start_date'] ?? 'Start Date'}}</label>
                            <input type="date" class="form-control" wire:model="start_date">
                        </div>
                        <div class="col-md-3">
                            <label>{{$lang->data['end_date'] ?? 'End Date'}}</label>
                            <input type="date" class="form-control" wire:model="end_date">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>{{$lang->data['select_customer'] ?? 'Select Customer'}}</label>
                            <input type="text" wire:model="customer_query" class="form-control"
                                placeholder="@if (!$selected_customer) {{ $lang->data['select_a_customer'] ?? 'Select A Customer' }} @else {{ $selected_customer->name }} @endif">
                            @if ($customers && count($customers) > 0)
                                <ul class="list-group customhover">
                                    @foreach ($customers as $row)
                                        <li class="list-group-item customhover2"
                                            wire:click="selectCustomer({{ $row->id }})">{{ $row->name }} - {{$row->phone}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="col-md-2 flex-column flex">
                            <label>&nbsp;</label>
                            <button class="btn btn-primary" wire:click="getData()">{{$lang->data['fetch'] ?? 'Fetch'}}</button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered align-items-center mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ">{{ $lang->data['date'] ?? 'Date' }}</th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['from'] ?? 'From' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs  opacity-7">
                                        {{ $lang->data['voucher_no'] ?? 'Voucher No' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs  opacity-7">
                                        {{ $lang->data['particulars'] ?? 'Particulars' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs  opacity-7">
                                        {{ $lang->data['debit'] ?? 'Debit' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs  opacity-7">
                                        {{ $lang->data['credit'] ?? 'Credit' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                        {{ $lang->data['balance'] ?? 'Balance' }}</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $debits = 0 + ($first_data != null ? $first_data['debits'] : 0);
                                    $credits = 0 +($first_data != null ? $first_data['credits'] : 0);
                                    $balance = $debits - $credits
                                
                                @endphp
                                @if($first_data)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                            {{$lang->data['opening_balance'] ?? 'Opening Balance'}}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0  px-4">
                                            @if($debits)
                                            {{getFormattedCurrency($debits)}}
                                        @else
                                            {{getFormattedCurrency(0)}} 
                                        @endif
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0  px-4">
                                            @if($credits)
                                            {{getFormattedCurrency($credits)}}
                                        @else
                                            {{getFormattedCurrency(0)}} 
                                        @endif
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                            @if(isset($balance))
                                                @if($balance < 0)
                                                {{getFormattedCurrency($balance * -1)}} Cr 
                                                @else
                                                {{getFormattedCurrency($balance)}}  Dr 
                                                @endif
                                            @else
                                                {{getFormattedCurrency(0)}} Cr 
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                                @endif
                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0 px-2" >{{\Carbon\Carbon::parse($item['date'])->format('d/m/Y')}}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                            @if($item['type'] == 'debit')
                                                {{$lang->data['order'] ?? 'Order'}}
                                            @else
                                                {{$lang->data['payment'] ?? 'Payment'}}
                                            @endif
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                            @if($item['type'] == 'debit')
                                                #{{$item['order_number']}}
                                            @else
                                                -
                                            @endif
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                            @if($item['type'] == 'debit')
                                               Sales - #{{$item['order_number']}}
                                            @else
                                                @php
                                                    $order = \App\Models\Order::where('id',$item['order_id'])->first();
                                                @endphp
                                               {{$lang->data['payment'] ?? 'Payment'}} - #{{$order->order_number}}
                                            @endif
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0  px-4">
                                            @if($item['type'] == 'debit')
                                            {{getFormattedCurrency($item['total'])}}
                                            @else
                                            {{getFormattedCurrency(0)}}
                                            @endif
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0 px-4">
                                            @if($item['type'] == 'credit')
                                            {{getFormattedCurrency($item['received_amount'])}}
                                            @else
                                            {{getFormattedCurrency(0)}}
                                            @endif
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                            @php
                                                if($item['type'] == 'debit')
                                                {
                                                    $debits += $item['total'];
                                                }
                                                else{
                                                    $credits += $item['received_amount'];
                                                }
                                                $balance = $debits - $credits
                                            @endphp
                                            @if($balance < 0)
                                             {{getFormattedCurrency($balance * -1)}} Cr 
                                            @else
                                           {{getFormattedCurrency($balance)}}  Dr 
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                                @endforeach
                               <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">
                                        {{$lang->data['total'] ?? 'Total'}}
                                    </p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0  px-4">
                                        @if($debits)
                                       {{getFormattedCurrency($debits)}}
                                    @else
                                        {{getFormattedCurrency(0)}} Cr 
                                    @endif
                                    </p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0  px-4">
                                        @if($credits)
                                       {{getFormattedCurrency($credits)}}
                                    @else
                                        {{getFormattedCurrency(0)}} Cr 
                                    @endif
                                    </p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">
                                        @if(isset($balance))
                                            @if($balance < 0)
                                            {{getFormattedCurrency($balance * -1)}} Cr 
                                            @else
                                            {{getFormattedCurrency($balance)}}  Dr 
                                            @endif
                                        @else
                                            {{getFormattedCurrency(0)}} Cr 
                                        @endif
                                    </p>
                                </td>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>