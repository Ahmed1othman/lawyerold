<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\ClientRepo;
use App\Http\Requests\Admin\ClientRequest;
use App\Models\Client;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repo;


    public function __construct(ClientRepo $repo)
    {

        $this->repo = $repo;
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data = $this->repo->getAll();
        $clients = Client::all();
        return view('admin.clients.index', compact('data', 'clients'));
    }

    public function create()
    {
        try {
            return view('admin.clients.create');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(ClientRequest $request)
    {
       try {
            $data = [
                'name' => ['en' => $request->name, 'ar' => $request->name_ar],
            ];

            $file = request()->file('photo');
            if ($file) {
                $data['photo'] = $this->repo->storeFile($file, 'clients');
            }

            $this->repo->create($data);
            session()->flash('Add', 'تم اضافه العميل بنجاح ');
            return redirect('clients');
       } catch (\Exception $e) {
           return redirect()->back()
               ->with('error', __('app.some_thing_error'));
       }
    }


    public function edit($slider)
    {
        try {
            $data = $this->repo->findOrFail($slider);
            return view('admin.clients.edit', compact('data'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }

    public function update(ClientRequest $request, $id)
    {

        $item = $this->repo->findOrFail($request->id);
        try {
            $data = [
                'name' => ['en' => $request->name, 'ar' => $request->name_ar],
            ];
            $file = request()->file('photo');
            if ($file) {
                FacadesFile::delete('public/clients/' . $item->photo);
                $data['photo'] = $this->repo->storeFile($file, 'clients');
            }
            $this->repo->update($data, $item);
            session()->flash('Edit', 'تم تعديل العميل بنجاح ');
            return redirect('clients');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($clients)
    {
        $clients = $this->repo->bulkDelete([$clients]);
        if (!$clients) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }

    public function deletedFeature()
    {
        $clients = Client::onlyTrashed()->get();
        return view('admin.clients.deleted', compact('clients'));
    }
}
