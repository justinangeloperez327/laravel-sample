<x-layouts.dashboard>
    <div class="px-4 mx-2">
        <div class="flex mb-2 justify-between">
            <div class="">
                <h2 class="text-2xl font-semibold">Items</h2>
            </div>
            <div class="">
                <a href="{{ route('items.create') }}" class="btn btn-neutral btn-dash btn-sm">Add Item</a>
            </div>
        </div>
        <div class="rounded-box border border-base-content/5 bg-base-100">
            <table class="table border-collapse border border-gray-400">
                <thead>
                    <tr class="text-center">
                        <th class="">ID</th>
                        <th>Name</th>
                        <th>SKU</th>
                        <th>Reorder Level</th>
                        <th>Total Stocks</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr class="bg-hover:bg-base-100">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <span class="font-extrabold">{{ $item->name }}</span>
                            </td>
                            <td>{{ $item->sku }}</td>
                            <td class="text-right ">
                                {{ $item->reorder_level }}
                            </td>
                            <td class="text-right">
                                <span
                                    class="{{ $item->total_stock < $item->reorder_level ? 'text-red-600 font-bold' : '' }}">
                                    {{ $item->total_stock ?? 0 }}
                                </span>
                            </td>
                            <td class="whitespace-nowrap text-right relative">
                                <div class="dropdown dropdown-end">
                                    <label tabindex="0" class="btn btn-sm btn-dash">Actions</label>
                                    <ul tabindex="0"
                                        class="dropdown-content menu bg-base-100 rounded-box shadow z-50 w-48 absolute">
                                        <li class="block w-full">
                                            <a href="{{ route('items.show', $item->id) }}" class="text-sm">Show</a>
                                        </li>
                                        <li class="block w-full">
                                            <a href="{{ route('items.edit', $item->id) }}" class="text-sm">Edit</a>
                                        </li>
                                        <li class="block w-full">
                                            <a href="{{ route('stocks.index', $item->id) }}"
                                                class="btn-primary btn-dash">Stocks</a>
                                        </li>
                                        <li class="block w-full">
                                            <form method="POST" action="{{ route('items.destroy', $item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-sm text-red-600 block w-full text-left">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
