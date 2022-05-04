<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\OrderRepo;
use App\Models\order;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $repo;

    public function __construct(OrderRepo $repo)
    {
        $this->repo = $repo;
    }
    public function index()
    {
        $Orders = order::orderBy('created_at','desc')->get();
        return view('admin.orders.index', compact('Orders'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $order = order::findOrFail($id);
        return view('admin.orders.show-details', compact('order'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $order = Order::findOrfail($request->id);
        $order->update(['note'=>$request->note]);
        session()->flash('Edit', __('admin/app.success_message'));
        return redirect()->back();
    }

    public function deleted()
    {
        $Orders = Order::onlyTrashed()->get();
        return view('admin.orders.deleted', compact('Orders'));
    }

    public function destroy($order)
    {
        $Orders = $this->repo->bulkDelete([$order]);
        if (!$Orders) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }



    public function restor($order)
    {
        $Orders = $this->repo->bulkRestore([$order]);
        if (!$Orders) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }
}
