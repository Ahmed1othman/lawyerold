<?php

namespace Database\Seeders;

use App\Models\Info;
use App\Models\SliderOption;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->delete();
        DB::table('slider_options')->delete();
        Info::create(['option' => 'website_name_en','value' => 'Abd-Allah Mansour','type' => 'string']);
        Info::create(['option' => 'website_name_ar','value' => 'عبدالله منصور','type' => 'string']);
        //Info::create(['option' => 'lawyer_name_ar','value' => 'عبدالله منصور','type' => 'string']);
        //Info::create(['option' => 'lawyer_name_en','value' => 'عبدالله منصور','type' => 'string']);
        //Info::create(['option' => 'lawyer_title_ar','value' => 'موثق ومستشار قانوني','type' => 'string']);
        Info::create(['option' => 'header_text_ar','value' => 'Notarized and legal advisor','type' => 'text']);
        Info::create(['option' => 'header_text_en','value' => 'Notarized and legal advisor','type' => 'text']);
        Info::create(['option' => 'lawyer_photo','value' => 'lawyer.photo','type' => 'image']);
        Info::create(['option' => 'logo_en','value' => 'logo.png','type' => 'image']);
        Info::create(['option' => 'logo_ar','value' => 'logo.png','type' => 'image']);
        Info::create(['option' => 'favicon','value' => 'logo.png','type' => 'image']);
        Info::create(['option' => 'show_logo','value' => true,'type' => 'checkbox']);
        Info::create(['option' => 'portfolio_pdf','value' => 'portfolio.pdf','type' => 'pdf']);
        Info::create(['option' => 'main_background','value' => 'background.png','type' => 'image']);
        Info::create(['option' => 'email','value' => 'othmanahmed865@gmail.com','type' => 'string']);
        Info::create(['option' => 'notifications_email','value' => 'othmanahmed865@gmail.com','type' => 'string']);
        Info::create(['option' => 'phone','value' => '0100000000','type' => 'string']);
        Info::create(['option' => 'whats_up','value' => '','type' => 'string']);
        Info::create(['option' => 'address_en','value' => 'Cairo, Egypt','type' => 'string']);
        Info::create(['option' => 'address_ar','value' => 'القاهرة - مصر','type' => 'string']);
        Info::create(['option' => 'fb_link','value' => '','type' => 'string']);
        Info::create(['option' => 'twitter_link','value' => '','type' => 'string']);
        Info::create(['option' => 'linked_link','value' => '','type' => 'string']);
        Info::create(['option' => 'instagram_link','value' => '','type' => 'string']);
        Info::create(['option' => 'snapchat_link','value' => '','type' => 'string']);
        Info::create(['option' => 'youtube_link','value' => '','type' => 'string']);
        Info::create(['option' => 'about_us_en','value' => 'About US bla bla bla bla bla bla bla bla ...','type' => 'text']);
        Info::create(['option' => 'about_us_ar',
            'value' => 'يعتبر مكتب العيسى للمحاماة والاستشارات القانونية من اول المكاتب الرائدة في مجال المحاماة في المملكة العربية السعودية، قام بتأسيسه الدكتور ابراهيم بن عيسى العيسى في عام 1993م، المحامي والمستشار القانوني المعروف، وهو الذي يملك سجل واسع من الخبرات العلمية والعملية من خلال أكثر من 45 سنة قضاها في مختلف المجالات القانونية. وبدء نشاطه في المحاماة منذ عام 1993م واستمر حتى وقتنا الحالي.
وبعد ارتباط الدكتور ابراهيم العيسى بعضوية مجلس الشورى، انتقلت إدارة المكتب إلى الدكتور/ محمد العيسى، صاحب الخبرة الواسعة في القوانين المحلية والدولية، فهو يحمل شهادة الدكتوراه في القانون بتخصص التحكيم التجاري الدولي، وكذلك الماجستير في القانون التجاري الدولي من جامعة ايسكس البريطانية، وبدأت خبراته العملية منذ 1998م.           ','type' => 'text']);
        Info::create(['option' => 'mission_en','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);
        Info::create(['option' => 'mission_ar','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);

        Info::create(['option' => 'vision_en','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);
        Info::create(['option' => 'vision_ar','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);

        Info::create(['option' => 'values_en','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);
        Info::create(['option' => 'values_ar','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);

        Info::create(['option' => 'documentation_en','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);
        Info::create(['option' => 'documentation_ar','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);

        Info::create(['option' => 'theme','value' => 'light','type' => 'select_theme']);
        Info::create(['option' => 'main_color','value' => '#47896a','type' => 'color']);
//        Info::create(['option' => 'secondary_color','value' => '#e0cd1d','type' => 'color']);
        Info::create(['option' => 'main_font_color','value' => '#f5cf6e','type' => 'color']);
//        Info::create(['option' => 'secondary_font_color','value' => '#e0cd1d','type' => 'color']);
        Info::create(['option' => 'font_family','value' => '\'Cairo\', sans-serif','type' => 'string']);
        Info::create(['option' => 'font_url','value' => 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap','type' => 'string']);
        SliderOption::create(['image' => 'slidingoverlayhorizontal','word' => 'x:right']);
    }
}
