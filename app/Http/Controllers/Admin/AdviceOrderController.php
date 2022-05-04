<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\AdviceOrderRepo;
use App\Models\AdviceOrder;
use Illuminate\Http\Request;

class AdviceOrderController extends Controller
{
    protected $repo;

    public function __construct(AdviceOrderRepo $repo)
    {
        $this->repo = $repo;
    }
    public function index()
    {
        $adviceOrders = adviceOrder::orderBy('created_at','desc')->get();
        return view('admin.advice-orders.index', compact('adviceOrders'));
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
        $adviceOrder = AdviceOrder::findOrFail($id);
        return view('admin.advice-orders.show-details', compact('adviceOrder'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $order = AdviceOrder::findOrfail($request->id);
        $order->update(['note'=>$request->note]);
        session()->flash('Edit', __('admin/app.success_message'));
        return redirect()->back();
    }

    public function deleted()
    {
        $adviceOrders = AdviceOrder::onlyTrashed()->get();
        return view('admin.advice-orders.deleted', compact('adviceOrders'));
    }

    public function destroy($order)
    {
        $adviceOrders = $this->repo->bulkDelete([$order]);
        if (!$adviceOrders) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }



    public function restor($order)
    {
        $adviceOrders = $this->repo->bulkRestore([$order]);
        if (!$adviceOrders) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }
}

