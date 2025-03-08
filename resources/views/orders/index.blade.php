<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Data Orders</h3>
                    </div>
                    <div class="card-body">
                        <table id="tableOrder" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ formatRupiah($order->amount) }}</td>
                                        <td>
                                            @if ($order->status == $orderStatus::PENDING)
                                                <span class="badge badge-warning">Pending</span>
                                            @elseif ($order->status == $orderStatus::PAID)
                                                <span class="badge badge-success">Paid</span>
                                            @elseif ($order->status == $orderStatus::CANCELED)
                                                <span class="badge badge-danger">Canceled</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-primary">
                                                <i class="fa-solid fas fa-eye"></i>
                                            </a>
                                            <a id="deleteOrder" class="btn btn-danger"
                                                data-url="">
                                                <i class="fa-solid fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>