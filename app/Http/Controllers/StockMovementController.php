<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Stock;
use App\Models\StockMovement;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class StockMovementController extends Controller
{
    public function index()
    {
        $stockMovements = StockMovement::with(['item', 'warehouse', 'user'])->get();
        return view('stock-movements.index', [
            'stockMovements' => $stockMovements
        ]);
    }


    public function create(Stock $stock)
    {
        return view('stock-movements.create', [
            'stock' => $stock,
            'warehouses' => Warehouse::where('id', '!=', $stock->warehouse_id)->get()
        ]);
    }

    public function store(Stock $stock, Request $request)
    {
        $stock->load('item');
        $item = $stock->item;

        $validated = $request->validate([
            'warehouse_id' => ['required'],
            'quantity' => ['required', 'integer'],
            'note' => ['nullable', 'string', 'max:255']
        ]);

        // Check first if the quantity is available in the from_warehouse_id
        if ($stock->quantity < $validated['quantity']) {
            return back()->withErrors(['quantity' => 'Insufficient stock in the from warehouse.'])->withInput();
        }

        // Deduct stock from the source warehouse
        $stock->decrement('quantity', $validated['quantity']);

        StockMovement::create([
            'item_id' => $item->id,
            'warehouse_id' => $stock->warehouse_id,
            'type' => 'transfer_out',
            'quantity' => $validated['quantity'],
            'note' => $validated['note'] ?? null,
            'user_id' => auth()->id(),
        ]);

        // Add stock to the destination warehouse
        $toStock = $item->stocks()->where('warehouse_id', $validated['warehouse_id'])->first();
        if ($toStock) {
            $toStock->increment('quantity', $validated['quantity']);
        } else {
            $item->stocks()->create([
                'warehouse_id' => $validated['warehouse_id'],
                'quantity' => $validated['quantity']
            ]);
        }

        StockMovement::create([
            'item_id' => $item->id,
            'warehouse_id' => $validated['warehouse_id'],
            'type' => 'transfer_in',
            'quantity' => $validated['quantity'],
            'note' => $validated['note'] ?? null,
            'user_id' => auth()->id(),
        ]);

        return redirect(route('stocks.index', $item->id))->with('success', 'Transfer successful');
    }
}
