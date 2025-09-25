<x-layouts.dashboard>
    <div class="px-4 mx-2">
        <div class="flex mb-2 justify-between">
            <div class="">
                <h2 class="text-2xl font-semibold">Plans</h2>
            </div>
            <div class="">
                <a href="{{ route('plans.create') }}" class="btn btn-neutral btn-dash btn-sm">Add Plan</a>
            </div>
        </div>

        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
            <table class="table table-xs">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="">Name</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th>Billing Cycle</th>
                        <th>Status</th>
                        <th>Features</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($plans as $plan)
                        <tr class="hover:bg-base-300">
                            <td>{{ $plan->id }}</td>
                            <td>{{ $plan->name }}</td>
                            <td>{{ $plan->code }}</td>
                            <td>${{ number_format($plan->price, 2) }}</td>
                            <td>{{ ucfirst($plan->billing_cycle) }}</td>
                            <td>
                                <div class="badge badge-xs {{ $plan->active ? 'badge-success' : 'badge-error' }}"></div>
                            </td>
                            <td>
                                <a href="{{ route('plans.show', $plan->id) }}"
                                    class="btn btn-sm btn-info btn-dash">show</a>
                                <a href="{{ route('plans.edit', $plan->id) }}"
                                    class="btn btn-sm btn-success btn-dash">edit</a>
                                <form method="POST" action="/plans/{{ $plan->id }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-warning btn-dash">delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No plans found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.dashboard>
