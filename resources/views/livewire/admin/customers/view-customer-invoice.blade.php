<div>
    <div class="row align-items-center justify-content-between mb-4">
        <div class="col">
            <h5 class="fw-500 text-white">{{ $lang->data['customer_details'] ?? 'Customer Details' }}</h5>
        </div>
        <div class="col-auto">
            <a href="{{ route('admin.customers') }}" class="btn btn-icon btn-3 btn-white text-primary mb-0">
                <i class="fa fa-arrow-left me-2"></i> {{ $lang->data['back'] ?? 'Back' }}
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body p-4">
                    <div class="d-flex flex-column ">
                        <div class="d-flex align-items-center gap-3">
                            <div class="p-3 bg-light rounded d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>
                            <div class="fw-500">
                                {{ $customer->name }}
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex gap-3 align-items-center mt-2">
                                <div class="bg-light p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" height="24"
                                        viewBox="0 -960 960 960" width="24">
                                        <path
                                            d="M240-80q-50 0-85-35t-35-85v-120h120v-560l60 60 60-60 60 60 60-60 60 60 60-60 60 60 60-60 60 60 60-60v680q0 50-35 85t-85 35H240Zm480-80q17 0 28.5-11.5T760-200v-560H320v440h360v120q0 17 11.5 28.5T720-160ZM360-600v-80h240v80H360Zm0 120v-80h240v80H360Zm320-120q-17 0-28.5-11.5T640-640q0-17 11.5-28.5T680-680q17 0 28.5 11.5T720-640q0 17-11.5 28.5T680-600Zm0 120q-17 0-28.5-11.5T640-520q0-17 11.5-28.5T680-560q17 0 28.5 11.5T720-520q0 17-11.5 28.5T680-480ZM240-160h360v-80H200v40q0 17 11.5 28.5T240-160Zm-40 0v-80 80Z" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column  ">
                                    <div class="font-weight-bold text-xs">
                                        {{ $lang->data['total_invoices'] ?? 'Total Invoices' }}
                                    </div>
                                    <div class="font-weight-bold text-sm">
                                        {{ $invoice_count }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center mt-2">
                                <div class="bg-light p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                        width="24">
                                        <path
                                            d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column  ">
                                    <div class="font-weight-bold text-xs">
                                        {{ $lang->data['invoice_total'] ?? 'Invoice Total' }}
                                    </div>
                                    <div class="font-weight-bold text-sm">
                                        {{ getFormattedCurrency($invoice_amount) }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center mt-2">
                                <div class="bg-light p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                        width="24">
                                        <path
                                            d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column  ">
                                    <div class="font-weight-bold text-xs">
                                        {{ $lang->data['total_payments'] ?? 'Total Payments' }}
                                    </div>
                                    <div class="font-weight-bold text-sm">
                                        {{ getFormattedCurrency($payment) }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center mt-2">
                                <div class="bg-light p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                        width="24">
                                        <path
                                            d="M441-120v-86q-53-12-91.5-46T293-348l74-30q15 48 44.5 73t77.5 25q41 0 69.5-18.5T587-356q0-35-22-55.5T463-458q-86-27-118-64.5T313-614q0-65 42-101t86-41v-84h80v84q50 8 82.5 36.5T651-650l-74 32q-12-32-34-48t-60-16q-44 0-67 19.5T393-614q0 33 30 52t104 40q69 20 104.5 63.5T667-358q0 71-42 108t-104 46v84h-80Z" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column  ">
                                    <div class="font-weight-bold text-xs">
                                        {{ $lang->data['total_balance'] ?? 'Total Balance' }}
                                    </div>
                                    <div class="font-weight-bold text-sm">
                                        @php
                                            $balance_amount = $invoice_amount - $payment;
                                        @endphp
                                        @if ($balance_amount == 0)
                                            {{ getFormattedCurrency($balance_amount) }} {{ 'Cr' }}
                                        @else
                                            @if ($balance_amount < 0)
                                                {{ getFormattedCurrency($balance_amount * -1) }} {{ 'Cr' }}
                                            @else
                                                {{ getFormattedCurrency($balance_amount) }} {{ 'Dr' }}
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center mt-2">
                                <div class="bg-light p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" height="24" width="24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column  ">
                                    <div class="font-weight-bold text-xs">
                                        {{ $lang->data['phone_number'] ?? 'Phone Number' }}
                                    </div>
                                    <div class="font-weight-bold text-sm">
                                        {{ $customer->phone ? $customer->phone : '-' }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center mt-2">
                                <div class="bg-light p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" height="24" width="24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column  ">
                                    <div class="font-weight-bold text-xs">
                                        {{ $lang->data['email'] ?? 'Email' }}
                                    </div>
                                    <div class="font-weight-bold text-sm">
                                        {{ $customer->email ? $customer->email : '-' }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center mt-2">
                                <div class="bg-light p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" height="24" width="24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column  ">
                                    <div class="font-weight-bold text-xs">
                                        {{ $lang->data['tax_number'] ?? 'Tax Number' }}
                                    </div>
                                    <div class="font-weight-bold text-sm">
                                        {{ $customer->tax_number ? $customer->tax_number : '-' }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center mt-2">
                                <div class="bg-light p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" height="24" width="24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </div>
                                <div class="d-flex flex-column  ">
                                    <div class="font-weight-bold text-xs">
                                        {{ $lang->data['address'] ?? 'Address' }}
                                    </div>
                                    <div class="font-weight-bold text-sm">
                                        {{ $customer->address ? $customer->address : '-' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mb-4">
                <div class="card-body p-4 row">
                    <div class="col-12">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    {{ $lang->data['invoices'] ?? 'Invoices' }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.customer_view_payments', $customer->id) }}">
                                    {{ $lang->data['payments'] ?? 'Payments' }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 pt-3">
                        <table class="table align-items-center mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs opacity-7">
                                        {{ $lang->data['order_info'] ?? 'Order Info' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs  opacity-7">
                                        {{ $lang->data['order_amount'] ?? 'Order Amount' }}
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs opacity-7">
                                        {{ $lang->data['status'] ?? 'Status' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7">
                                        {{ $lang->data['payment'] ?? 'Payment' }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs opacity-7 ps-2">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>
                                            <p class="text-sm px-3 mb-0">
                                                <span
                                                    class="me-2">{{ $lang->data['order_id'] ?? 'Order ID' }}:</span>
                                                <span class="font-weight-bold">{{ $item->order_number }}</span>
                                            </p>
                                            <p class="text-sm px-3 mb-0">
                                                <span
                                                    class="me-2">{{ $lang->data['order_date'] ?? 'Order Date' }}:</span>
                                                <span
                                                    class="font-weight-bold">{{ \Carbon\Carbon::parse($item->order_date)->format('d/m/y') }}
                                                    {{ $item->created_by }} {{ Auth::user()->id }}</span>
                                            </p>
                                            <p class="text-sm px-3 mb-0">
                                                <span
                                                    class="me-2">{{ $lang->data['delivery_date'] ?? 'Delivery Date' }}:</span>
                                                <span
                                                    class="font-weight-bold">{{ \Carbon\Carbon::parse($item->delivery_date)->format('d/m/y') }}</span>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm px-3 font-weight-bold mb-0">
                                                {{getFormattedCurrency($item->total)}}
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if ($item->status == 0)
                                                <a type="button"
                                                    class="badge badge-sm bg-secondary text-uppercase">{{ $lang->data['pending'] ?? 'Pending' }}</a>
                                            @elseif($item->status == 1)
                                                <a type="button"
                                                    class="badge badge-sm bg-warning text-uppercase">{{ $lang->data['processing'] ?? 'Processing' }}</a>
                                            @elseif($item->status == 2)
                                                <a type="button"
                                                    class="badge badge-sm bg-success text-uppercase">{{ $lang->data['ready_to_deliver'] ?? 'Ready To Deliver' }}</a>
                                            @elseif($item->status == 3)
                                                <a type="button"
                                                    class="badge badge-sm bg-primary text-uppercase">{{ $lang->data['delivered'] ?? 'Delivered' }}</a>
                                            @elseif($item->status == 4)
                                                <a type="button"
                                                    class="badge badge-sm bg-danger text-uppercase">{{ $lang->data['returned'] ?? 'Returned' }}</a>
                                            @endif
                                        </td>
                                        <td class="px-3">
                                            @php
                                                $paidamount = \App\Models\Payment::where('order_id', $item->id)->sum('received_amount');
                                            @endphp
                                            <p class="text-sm mb-0">
                                                <span
                                                    class="me-2">{{ $lang->data['total_amount'] ?? 'Total Amount' }}:</span>
                                                <span class="font-weight-bold"> {{getFormattedCurrency($item->total)}}</span>
                                            </p>
                                            <p class="text-sm mb-1">
                                                <span
                                                    class="me-2">{{ $lang->data['paid_amount'] ?? 'Paid Amount' }}:</span>

                                                <span class="font-weight-bold"> {{getFormattedCurrency($paidamount)}}</span>
                                            </p>
                                            @if ($paidamount < $item->total)
                                                @if ($item->status != 4)
                                                    @if (Auth::user()->id != 1)
                                                        @if ($item->created_by == Auth::user()->id)
                                                            <a data-bs-toggle="modal" data-bs-target="#addpayment"
                                                                wire:click="payment({{ $item->id }})"
                                                                type="button"
                                                                class="badge badge-xs badge-success text-xs fw-600">
                                                                {{ $lang->data['add_payment'] ?? 'Add Payment' }}
                                                            </a>
                                                        @endif
                                                    @else
                                                        <a data-bs-toggle="modal" data-bs-target="#addpayment"
                                                            wire:click="payment({{ $item->id }})" type="button"
                                                            class="badge badge-xs badge-success text-xs fw-600">
                                                            {{ $lang->data['add_payment'] ?? 'Add Payment' }}
                                                        </a>
                                                    @endif
                                                @endif
                                            @else
                                                <a data-bs-toggle="modal" type="button"
                                                    class="badge badge-xs badge-dark text-xs fw-600">
                                                    {{ $lang->data['fully_paid'] ?? 'Fully Paid' }}
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if (Auth::user()->id != 1)
                                                @if ($item->created_by == Auth::user()->id)
                                                    <a href="{{ route('admin.view_single_order', $item->id) }}"
                                                        type="button"
                                                        class="badge badge-xs badge-primary text-xs fw-600">
                                                        {{ $lang->data['view'] ?? 'View' }}
                                                    </a>
                                                @endif
                                            @else
                                                <a href="{{ route('admin.view_single_order', $item->id) }}"
                                                    type="button"
                                                    class="badge badge-xs badge-primary text-xs fw-600">
                                                    {{ $lang->data['view'] ?? 'View' }}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if ($hasMorePages)
                            <div x-data="{
                                init() {
                                    let observer = new IntersectionObserver((entries) => {
                                        entries.forEach(entry => {
                                            if (entry.isIntersecting) {
                                                @this.call('loadOrders')
                                                console.log('loading...')
                                            }
                                        })
                                    }, {
                                        root: null
                                    });
                                    observer.observe(this.$el);
                                }
                            }"
                                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-4">
                                <div class="text-center pb-2 d-flex justify-content-center align-items-center">
                                    Loading...
                                    <div class="spinner-grow d-inline-flex mx-2 text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade " id="addpayment" tabindex="-1" role="dialog" aria-labelledby="addpayment"
        aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fw-600" id="addpayment">
                        {{ $lang->data['payment_details'] ?? 'Payment Details' }}
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    @if ($order)
                        <div class="modal-body">
                            <div class="row g-2 align-items-center">
                                <div class=" col-12">
                                    <div class="row mb-50 align-items-center">
                                        <div class="col text-sm fw-500">
                                            {{ $lang->data['payment_details'] ?? 'Payment Details' }}:
                                        </div>
                                        <div class="col-auto text-sm fw-500">{{ $customer_name }}</div>
                                    </div>
                                    <div class="row mb-50 align-items-center">
                                        <div class="col text-sm fw-500">{{ $lang->data['order_id'] ?? 'Order ID' }}:
                                        </div>
                                        <div class="col-auto text-sm fw-500">{{ $order->order_number }}</div>
                                    </div>
                                    <div class="row mb-50 align-items-center">
                                        <div class="col text-sm fw-500">
                                            {{ $lang->data['order_date'] ?? 'Order Detail' }}:
                                        </div>
                                        <div class="col-auto  text-sm fw-500">
                                            {{ \Carbon\Carbon::parse($order->order_date)->format('d/m/Y') }}
                                        </div>
                                    </div>
                                    <div class="row mb-50 align-items-center">
                                        <div class="col text-sm fw-500">
                                            {{ $lang->data['delivery_date'] ?? 'Delivery Date' }}:
                                        </div>
                                        <div class="col-auto  text-sm fw-500">
                                            {{ \Carbon\Carbon::parse($order->delivery_date)->format('d/m/Y') }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-50 align-items-center">
                                        <div class="col text-sm fw-500">
                                            {{ $lang->data['order_amount'] ?? 'Order Amount' }}:
                                        </div>
                                        <div class="col-auto  text-sm fw-500">
                                            {{getFormattedCurrency($order->total)}}
                                        </div>
                                    </div>
                                    <div class="row mb-50 align-items-center">
                                        <div class="col text-sm fw-500">
                                            {{ $lang->data['paid_amount'] ?? 'Paid Amount' }}:
                                        </div>
                                        <div class="col-auto text-sm fw-500">
                                            {{getFormattedCurrency($paid_amount)}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <div class="col text-sm fw-600">{{ $lang->data['balance'] ?? 'Balance' }}:
                                        </div>
                                        <div class="col-auto text-sm fw-600">
                                            {{getFormattedCurrency($order->total - $paid_amount)}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-1">
                                            <label
                                                class="form-label">{{ $lang->data['paid_amount'] ?? 'Paid Amount' }}</label>
                                            <input type="number" class="form-control" placeholder="Enter Amount"
                                                wire:model="balance">
                                            @error('balance')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label
                                                class="form-label">{{ $lang->data['payment_type'] ?? 'Payment Type' }}</label>
                                            <select class="form-select" wire:model="payment_mode">
                                                <option value="">
                                                    {{ $lang->data['choose_payment_type'] ?? 'Choose Payment Type' }}
                                                </option>
                                                <option class="select-box" value="1">
                                                    {{ $lang->data['cash'] ?? 'Cash' }}
                                                </option>
                                                <option class="select-box" value="2">
                                                    {{ $lang->data['upi'] ?? 'UPI' }}
                                                </option>
                                                <option class="select-box" value="3">
                                                    {{ $lang->data['card'] ?? 'Card' }}
                                                </option>
                                                <option class="select-box" value="4">
                                                    {{ $lang->data['cheque'] ?? 'Cheque' }}
                                                </option>
                                                <option class="select-box" value="5">
                                                    {{ $lang->data['bank_transfer'] ?? 'Bank Transfer' }}
                                                </option>
                                            </select>
                                            @error('payment_mode')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <label
                                            class="form-label">{{ $lang->data['notes_remarks'] ?? 'Notes / Remarks' }}</label>
                                        <textarea class="form-control" placeholder="Enter Notes" wire:model="note"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ $lang->data['cancel'] ?? 'Cancel' }}</button>
                        <button type="submit" class="btn btn-primary"
                            wire:click.prevent="addPayment()">{{ $lang->data['save'] ?? 'Save' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
