<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

use App\Mail\RequestNotify;
use App\Models\AdviceOrder;
use App\Models\Client;
use App\Models\ContactUs;
use App\Models\Custom;
use App\Models\Employee;
use App\Models\feature;
use App\Models\news;
use App\Models\order;
use App\Models\project;
use App\Models\Service;
use App\Models\SliderOption;
use App\Models\Slider;
use App\Models\Subscription;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {


        $slideroption=SliderOption::first();

        if(!$slideroption){
            $slideroption=['word'=>'x:left','image'=>'slidingoverlayhorizontal'];
            SliderOption::create($slideroption);
            SliderOption::create($slideroption);
            $slideroption=json_encode($slideroption);
        }
        $date = [
//            'slideroption' => $slideroption,
            'services' => Service::whereActive(1)->orderByDesc('id')->get(),
            'employees' => Employee::whereActive(1)->orderByDesc('id')->get(),
            'clients' => Client::orderByDesc('id')->get(),
//            'sliders' => Slider::whereActive(1)->orderByDesc('id')->limit(3)->get(),
//            'features' => feature::whereActive(1)->orderByDesc('id')->limit(3)->get(),
//            'projects' => project::whereActive(1)->orderByDesc('id')->limit(3)->get(),
            'news' => news::whereActive(1)->orderByDesc('id')->limit(3)->get(),
        ];

        //$this->seo()->setTitle('الموثق والمحامي عبد الله منصور');
//        $this->seo()->metatags()->setKeywords();
        //seo meta tags for home page using seotools package
        $this->seo()->setDescription('مكتب المحامي والموثق عبد الله منصور لجميع اعمال التوثق والاستشارات القانونية');
        $this->seo()->opengraph()->addImage(asset('images/logo.png'));
        $this->seo()->setCanonical(url('/'));
        $this->seo()->opengraph()->setUrl(url('/'));
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'ar_AR');
        $this->seo()->opengraph()->addProperty('locale:alternate', ['ar_AR', 'en_US']);
        $this->seo()->opengraph()->setTitle('الموثق والمحامي/عبد الله منصور الشهراني');
        $this->seo()->opengraph()->setDescription('مكتب المحامي والموثق عبد الله منصور لجميع اعمال التوثق والاستشارات القانونية');

        return view('website.index', $date);
    }
    public function siteprojects()
    {
        $data = project::whereActive(1)->orderByDesc('id')->get();
        return view('website.projects', compact('data'));
    }
    public function projectDetails($id)
    {
        $row = project::find($id);
        return view('website.project-details', compact('row'));
    }
    public function siteservices()
    {
        $data = Service::whereActive(1)->orderByDesc('id')->get();
        return view('website.services', compact('data'));
    }
    public function serviceDetails($id)
    {
        $row = service::find($id);
        return view('website.service-details', compact('row'));
    }
    public function customPage($slug)
    {
        $row = Custom::where('name_'.App::getLocale(),$slug)->first();
        if($row){
            return view('website.custom-page', compact('row'));
        }
        return redirect('/');

    }
    public function sitenews()
    {
        $data = news::whereActive(1)->orderByDesc('id')->get();
        return view('website.news', compact('data'));
    }
    public function newsDetails($id)
    {
        $row = news::find($id);
        return view('website.news-details', compact('row'));
    }
    public function Orders(Request $request)
    {
        try {
            $orders = new order();
            $orders->name = $request->name;
            $orders->email = $request->email;
            $orders->type = $request->type;
            $orders->msg = $request->msg;
            $orders->phone = $request->phone;
            $data = $orders->save();
            if ($data) {
                $response = ['code' => 1, 'msg' => __('admin/app.your_data_send_successfully')];
                $this->sentNotificationMail($orders,'هذا تنبيه بوجود طلب توثيق جديد',route('orders.show',$orders->id),'طلب خدمة توثيق جديد');
            } else {
                $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            }
            return json_encode($response);
        } catch (\Exception $e) {
            DB::rollback();
            $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            return json_encode($response);
        }
    }
    public function contactus(Request $request)
    {
        try {
            $orders = new ContactUs();
            $orders->name = $request->name;
            $orders->email = $request->email;
            $orders->phone = $request->phone;
            $data = $orders->save();
            if ($data) {
                $response = ['code' => 1, 'msg' => __('admin/app.your_data_send_successfully')];
                $this->sentNotificationMail($orders,'هذا تنبيه بوجود طلب معاودة اتصال جديد',route('contact-us.show',$orders->id),'طلب معاودة اتصال جديد');

            } else {
                $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            }
            return json_encode($response);

        } catch (\Exception $e) {
            DB::rollback();
            $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            return json_encode($response);
        }

    }

    public function orderAdvice(Request $request)
    {

        try {
            $orders = new AdviceOrder();
            $orders->name = $request->name;
            $orders->email = $request->email;
            $orders->phone = $request->phone;
            $orders->msg = $request->msg;
            $orders->subject = $request->subject;
            $data = $orders->save();
            if ($data) {
                $response = ['code' => 1, 'msg' => __('admin/app.your_data_send_successfully')];
                $this->sentNotificationMail($orders,'هذا تنبيه بوجود طلب استشارة قانونية جديد',route('advice-orders.show',$orders->id),'طلب استشارة قانونية جديد');

            } else {
                $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            }
            return json_encode($response);

        } catch (\Exception $e) {
            DB::rollback();
            $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            return json_encode($response);
        }

    }


    public function subscription(Request $request)
    {
        try {


            $data['email'] = $request->email;

            $data = Subscription::create($data);
            if ($data) {
                $response = ['code' => 1, 'msg' => __('admin/app.your_email_send_successfully')];
            } else {
                $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            }
            return json_encode($response);
        } catch (\Exception $e) {
            DB::rollback();
            $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            return json_encode($response);
        }
    }

    public function openMarketing()
    {
        return view('website.open-marketing');
    }

    public function informationbuyansale()
    {
        return view('website.informationbuyansale');
    }

    public function balance()
    {
        return view('website.balance');
    }

    public function profile()
    {
        return view('website.profile');
    }



    public function downloadPdf(){
        try {
            $pdf = websiteInfo_hlp('portfolio_pdf');
            if ($pdf){
                //return Storage::disk('public')->download('front/'.$pdf,websiteInfo_hlp('website_name_en')."_cv",[],'inline');
                return response()->file(storage_path().'/public/front/'.$pdf);
            }
            }catch (\Exception $e){

            }

    }

    public function sentNotificationMail($data,$message,$url,$subject){
        if(websiteInfo_hlp('notifications_email')){
            $email_details = [];
            $email_details['message'] = $message;
            $email_details['data'] = $data;
            $email_details['url'] = $url;
            $email_details['subject'] = $subject;
            Mail::to(websiteInfo_hlp('notifications_email'))->send(new RequestNotify($email_details));
            return 'done';
        }
    }



}
