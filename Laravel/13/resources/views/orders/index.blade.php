<head>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<div class="container mx-auto p-6">

    <h1 class="text-2xl font-bold mb-6">Order List</h1>

    @forelse ($orders as $order)
        <div class="mb-8 border rounded-lg shadow">

            {{-- Order Header --}}
            <div class="bg-gray-100 p-4 flex justify-between">
                <div>
                    <p><strong>Order #:</strong> {{ $order->id }}</p>
                    <p><strong>Customer:</strong> {{ $order->user->name ?? 'N/A' }}</p>
                    <p><strong>Date:</strong> {{ $order->order_date }}</p>
                </div>

                <div class="text-right">
                    <p class="text-lg font-semibold">
                        Total: ${{ number_format($order->total_amount, 2) }}
                    </p>
                </div>
            </div>

            {{-- Order Items --}}
            <div class="overflow-x-auto">
                <table class="w-full border-t">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-3 text-left">Product</th>
                            <th class="p-3 text-center">Qty</th>
                            <th class="p-3 text-right">Unit Price</th>
                            <th class="p-3 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderItems as $item)
                            <tr class="border-t">
                                <td class="p-3">
                                    {{ $item->product->name ?? 'Deleted Product' }}
                                </td>
                                <td class="p-3 text-center">
                                    {{ $item->quantity }}
                                </td>
                                <td class="p-3 text-right">
                                    ${{ number_format($item->unit_price, 2) }}
                                </td>
                                <td class="p-3 text-right font-medium">
                                    ${{ number_format($item->quantity * $item->unit_price, 2) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @empty
        <p class="text-gray-500">No orders found.</p>
    @endforelse

</div>

