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

        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
            <table class="table table-xs">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="">Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr class="hover:bg-base-300">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('items.show', $item->id) }}"
                                    class="btn btn-sm btn-info btn-dash">show</a>
                                <a href="{{ route('items.edit', $item->id) }}"
                                    class="btn btn-sm btn-success btn-dash">edit</a>
                                <form method="POST" action="/items/{{ $item->id }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-warning btn-dash">delete</button>
                                </form>
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
