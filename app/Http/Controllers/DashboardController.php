<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Item;
use App\Models\Kategori;
use App\Models\User;
use App\Models\StockIn;
use App\Models\StockOut;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('frontend.staff.dashboard');
    }

    public function admin()
    {
        $totalSuppliers = Supplier::count();
        $totalItems = Item::count();
        $totalCategories = Kategori::count();
        $totalStaff = User::where('role', 'staf')->count();

        return view('frontend.admin.admin', compact('totalSuppliers', 'totalItems', 'totalCategories', 'totalStaff'));
    }

    public function stock()
    {
        // Ambil data stok masuk
        $stockInData = StockIn::selectRaw('DATE(received_at) as date, SUM(quantity) as total')
                        ->groupBy('date')
                        ->get();

        // Ambil data stok keluar
        $stockOutData = StockOut::selectRaw('DATE(received_at) as date, SUM(quantity) as total')
                        ->groupBy('date')
                        ->get();

        // Siapkan data untuk chart
        $labels = [];
        $stockInValues = [];
        $stockOutValues = [];

        // Loop melalui data stok masuk dan stok keluar untuk mengisi label dan nilai
        foreach ($stockInData as $data) {
            $labels[] = Carbon::parse($data->date)->format('l');
            $stockInValues[] = $data->total;
        }

        foreach ($stockOutData as $data) {
            $stockOutValues[] = $data->total;
        }

        return view('frontend.admin.dashboard', [
            'labels' => $labels,
            'stockInValues' => $stockInValues,
            'stockOutValues' => $stockOutValues,
        ]);
    }
}
