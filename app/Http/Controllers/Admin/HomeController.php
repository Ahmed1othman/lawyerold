<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\order;
use App\Models\SliderOption;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Codec\OrderedTimeCodec;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['visitors'] = $this->visitors();
        return view('admin.index',$data);
    }

    public function AllOrders()
    {

    }

    public function showOrder($id){

    }

    public function updateNote(Request $request){

    }

    public function contacts()
    {
        $data = ContactUs::all();
        return view('admin.contacts.index', compact('data'));

    }

    public function deletedOrders(Request $request)
    {

    }
    public function deleteddata(Request $request)
    {
        ContactUs::destroy($request->id);
        session()->flash('danger', 'تم الحذف بنجاح ');
        return redirect()->route('contacts');
    }
    public function showsliderOption()
    {
        $data = SliderOption::all();
        return view('admin.slider-option.index', compact('data'));

    }
    public function updatesliderOption()
    {
        $row = SliderOption::first();
        return view('admin.slider-option.edit', compact('row'));

    }
    public function savesliderOption(Request $request)
    {
        try{
            $data=$request->all();
            $row = SliderOption::first();
            if($row){
                $row->update($data);
            }else{
                SliderOption::create($data);
            }

            session()->flash('Add', __('admin/app.success_message'));
            return redirect('slider-option');

        } catch (\Exception $e) {
              return redirect()->back()
                ->with('error', __('admin/app.success_message'));
        }

    }
    public function getsliderOptions()
    {
        $data=SliderOption::first();

        if($data){

            $result=['word'=>$data->word,'image'=>$data->image];
            return response()->json($result, 200);

        }else{
            $data=['word'=>'x:left','image'=>'slidingoverlayhorizontal'];

            SliderOption::create($data);

            return response()->json($data, 200);
        }
    }

    public function visitors(){
        $start = date('Y-m-d', strtotime(Carbon::now()->subDays(30)));
        $end = date('Y-m-d');
        return Visitor::whereBetween('created_at', [$start . " 00:00:00", $end . " 23:59:59"])->select(
            DB::raw('count as views'),
            DB::raw('DATE(created_at) as day'),
        )
            ->orderBy('day')
            ->get();
    }
}
