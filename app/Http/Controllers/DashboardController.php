<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $totalItems = Item::count();
        $totalWarehouses = Warehouse::count();

        $totalLowStockItems = Item::whereHas('stocks', function ($query) {
            $query->whereColumn('quantity', '<=', 'reorder_level');
        })->count();

        return view('dashboard', [
            'totalItems' => $totalItems,
            'totalWarehouses' => $totalWarehouses,
            'totalLowStockItems' => $totalLowStockItems
        ]);
    }
}
