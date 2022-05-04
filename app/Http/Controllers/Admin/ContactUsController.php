<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\ContactUsRepo;
use App\Models\ContactUs;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    protected $repo;

    public function __construct(ContactUsRepo $repo)
    {
        $this->repo = $repo;
    }
    public function index()
    {
        $contactUs = ContactUs::orderBy('created_at','desc')->get();
        return view('admin.contact-us.index', compact('contactUs'));
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
        $contactUs = ContactUs::findOrFail($id);
        return view('admin.contact-us.show-details', compact('contactUs'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $order = ContactUs::findOrfail($request->id);
        $order->update(['note'=>$request->note]);
        session()->flash('Edit', __('admin/app.success_message'));
        return redirect()->back();
    }

    public function deleted()
    {
        $contactUs = ContactUs::onlyTrashed()->get();
        return view('admin.contact-us.deleted', compact('contactUs'));
    }

    public function destroy($order)
    {
        $contactUs = $this->repo->bulkDelete([$order]);
        if (!$contactUs) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }



    public function restor($order)
    {
        $contactUs = $this->repo->bulkRestore([$order]);
        if (!$contactUs) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }
}

