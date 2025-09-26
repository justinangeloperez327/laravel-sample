<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Stock;
use App\Models\StockLevel;
use App\Models\StockMovement;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(Item $item)
    {
        $item->load('stocks');

        return view('stocks.index', [
            'item' => $item
        ]);
    }

    public function create(Item $item)
    {
        $warehouseWithStocks = Stock::where('item_id', $item->id)->pluck('warehouse_id');

        $warehouses = Warehouse::whereNotIn('id', $warehouseWithStocks)->get();

        return view('stocks.create', [
            'item' => $item,
            'warehouses' => $warehouses
        ]);
    }

    public function store(Item $item, Request $request)
    {
        $validated = $request->validate([
            'warehouse_id' => ['required'],
            'quantity' => ['required', 'integer'],
        ]);

        $item->stocks()->create($validated);

        return redirect(route('stocks.index', $item->id))->with('success', 'Stocks Added');
    }

    public function edit(Stock $stock)
    {
        return view('stocks.edit', [
            'stock' => $stock
        ]);
    }

    public function update(Stock $stock, Request $request)
    {
        $validated = $request->validate([
            'quantity' => ['required', 'integer']
        ]);

        if($stock->quantity == $validated['quantity']) {
            return back()->with('info', 'No changes made to the stock quantity.');
        }

        if($stock->quantity < $validated['quantity']) {
            $type = 'increase';
            $quantity = $validated['quantity'] - $stock->quantity;
        } else {
            $type = 'decrease';
            $quantity = $stock->quantity - $validated['quantity'];
        }

        StockMovement::create([
            'warehouse_id' => $stock->warehouse_id,
            'item_id' => $stock->item_id,
            'type' => $type,
            'quantity' => $quantity,
            'user_id' => auth()->id(),
        ]);

        $stock->update([
            'quantity' => $validated['quantity']
        ]);

        return redirect(route('stocks.index', $stock->item_id))->with('success', 'Stocks Updated');
    }
}
