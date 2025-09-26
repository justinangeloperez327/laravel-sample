<x-layouts.dashboard>
    <div class="px-4 mx-2">
        <div class="flex mb-2 justify-between">
            <div class="">
                <h2 class="text-2xl font-semibold">Item: {{ $item->name }} stocks</h2>
            </div>
            <div class="">
                <a href="{{ route('stocks.create', $item->id) }}" class="btn btn-neutral btn-dash btn-sm">Add Stock</a>
            </div>
        </div>
        <div class="rounded-box border border-base-content/5 bg-base-100">
            <table class="table table-fixed">
                <thead>
                    <tr>
                        <th>Warehouse</th>
                        <th>Quantity</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($item->stocks as $stock)
                        <tr class="hover:bg-base-300">
                            <td>{{ $stock->warehouse->name }}</td>
                            <td>{{ $stock->quantity }}</td>
                            <td class="whitespace-nowrap text-right relative">
                                <div class="dropdown dropdown-end">
                                    <label tabindex="0" class="btn btn-sm btn-dash">Actions</label>
                                    <ul tabindex="0"
                                        class="dropdown-content menu bg-base-100 rounded-box shadow z-50 w-48 absolute">
                                        <li class="block w-full">
                                            <a href="{{ route('stocks.edit', $stock) }}"
                                                class="btn-primary btn-dash">Adjust</a>
                                        </li>
                                        <li class="block w-full">
                                            <a href="{{ route('stock-movements.create', $stock) }}"
                                                class="btn-secondary btn-dash">Transfer</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No stocks found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
