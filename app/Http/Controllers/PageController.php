<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStrukture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function PersanalCab()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();
        $orderStruktures = OrderStrukture::whereIn('order_id', $orders->pluck('id'))->get();

        return view('PersanalCab', [
            'showuser' => $user,
            'orders' => $orders,
            'orderStruktures' => $orderStruktures,
        ]);
    }

    public function show($id)
    {
        $order = Order::with('orderStructure')->findOrFail($id);
        $locations = OrderStrukture::all();
        return view('show', compact('order', 'locations'));
    }

    public function Admin()
    {
        return view('admin.admin');
    }

    public function AddEmployee()
    {
        return view('admin.addEmployee');
    }

    public function NewOrder()
    {
        return view('newOrder');
    }

    public function autopark()
    {
        return view('autopark');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function Awards()
    {
        $normalizedResults = DB::table('normalized_results')->get();
        return view('admin.awards', compact('normalizedResults'));
    }
}
