<x-layouts.dashboard>
    <div class="px-4 mx-2">
        <div class="flex mb-2 justify-between">
            <div class="">
                <h2 class="text-2xl font-semibold">Warehouses</h2>
            </div>
            <div class="">
                <a href="{{ route('warehouses.create') }}" class="btn btn-neutral btn-dash btn-sm">Add Warehouse</a>
            </div>
        </div>

        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
            <table class="table table-xs">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="">Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($warehouses as $warehouse)
                        <tr class="hover:bg-base-300">
                            <td>{{ $warehouse->id }}</td>
                            <td>{{ $warehouse->name }}</td>
                            <td>
                                <a href="{{ route('warehouses.show', $warehouse->id) }}"
                                    class="btn btn-sm btn-info btn-dash">show</a>
                                <a href="{{ route('warehouses.edit', $warehouse->id) }}"
                                    class="btn btn-sm btn-success btn-dash">edit</a>
                                <form method="POST" action="{{ route('warehouses.destroy', $warehouse->id) }}"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-warning btn-dash">delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No warehouses found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
