<x-layouts.dashboard>
    <div class="px-4 mx-2">
        <div class="flex mb-2 justify-between">
            <div class="">
                <h2 class="text-2xl font-semibold">Stock Movements</h2>
            </div>

        </div>
        <div class="rounded-box border border-base-content/5 bg-base-100">
            <table class="table border-collapse border border-gray-400">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Warehouse</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($stockMovements as $movement)
                        <tr class="hover:bg-base-300">
                            <td>{{ $movement->item->name }}</td>
                            <td>{{ $movement->warehouse->name }}</td>
                            <td>{{ $movement->type }}</td>
                            <td>{{ $movement->quantity }}</td>
                            <td>{{ $movement->user->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No stock movements found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
