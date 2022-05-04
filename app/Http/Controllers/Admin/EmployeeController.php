<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\EmployeeRepo;
use App\Http\Requests\Admin\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\File as FacadesFile;

class EmployeeController extends Controller
{
    protected $repo;

    public function __construct(EmployeeRepo $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {

        $data = $this->repo->getAll();
        $employees = employee::all();
        return view('admin.employees.index', compact('data', 'employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(EmployeeRequest $request)
    {
        try {
            $data = [
                'title' => ['en' => $request->title, 'ar' => $request->title_ar],
                'name' => ['en' => $request->name, 'ar' => $request->name_ar]
            ];
            if ($request->active) {
                $data['active'] = 1;
            } else {
                $data['active'] = 0;
            }
            $file = request()->file('photo');

            if ($file) {
                $data['photo'] = $this->repo->storeFile($file, 'employees');
            }

            $this->repo->create($data);
            session()->flash('Add', __('admin/app.add_success'));
            return redirect('employees');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($slider)
    {
        try {
            $data = $this->repo->findOrFail($slider);
            return view('admin.employees.edit', compact('data'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }

    }

    public function update(EmployeeRequest $request, $id)
    {
        $item = $this->repo->findOrFail($request->id);
        try {
            $data = [
                'title' => ['en' => $request->title, 'ar' => $request->title_ar],
                'notes' => ['en' => $request->notes, 'ar' => $request->notes_ar]
            ];
            if ($request->active) {
                $data['active'] = 1;
            } else {
                $data['active'] = 0;
            }

            $file = request()->file('photo');

            if ($file) {
                FacadesFile::delete('public/employees/' . $item->photo);
                $data['photo'] = $this->repo->storeFile($file, 'employees');
            }

            $this->repo->update($data, $item);

            session()->flash('Edit', __('admin/app.edit_success'));
            return redirect('employees');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }


    public function destroy($employees)
    {
        $employees = $this->repo->bulkDelete([$employees]);
        if (!$employees) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }

    public function deletedemployee()
    {
        $employees = employee::onlyTrashed()->get();
        return view('admin.employees.deleted', compact('employees'));
    }
}
