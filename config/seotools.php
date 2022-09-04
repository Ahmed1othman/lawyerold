<?php
/**
 * @see https://github.com/artesaos/seotools
 */


use Illuminate\Support\Facades\URL;

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "الموثق عبد الله منصور", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'مكتب الاستاذ الموثق والمحامي عبد الله منصور', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['موثق','توثيق','موثق معتمد','وكالة','وكالة تسجيل','موثق الرياض','موثق مهتمد بالرياض','موثق عقود','موثق عقود بالرياض','mwathiq','abdalla mansur','الموثق عبد الله منصور الشهراني','الموثق عبد الله منصور','المحامي عبد الله منصور الشهراني','عقود توثيق الشركات','مسئوليات الموثق','اقرب موثق بالرياض','موثق الرهن العقاري','موثق الميراث','موثق وكالات داخلية واجنبية','تصحيح رهن عقاري','طلب خدمة توثيق','افراغ عقاري','سداد الاقرارات المالية','اقرار مالي','فك رهن عقاري','فسخ وكالات'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'الموثق عبد الله منصور', // set false to total remove
            'description' => 'مكتب الاستاذ الموثق والمحامي عبد الله منصور', // set false to total remove
            'url'         => 'current', // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'abdalla mansour',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'مكتب الاستاذ الموثق والمحامي عبد الله منصور',
            'site'        => 'current',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'الموثق عبد الله منصور', // set false to total remove
            'description' => 'مكتب الاستاذ الموثق والمحامي عبد الله منصور', // set false to total remove
            'url'         => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];