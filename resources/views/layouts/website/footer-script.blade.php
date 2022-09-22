<script src="{{ asset('website/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{ asset('website/js/modernizr.custom.js')}}"></script>
<script src="{{ asset('website/js/animating.js')}}"></script>

<script src="{{ asset('website/js/imagesloaded.pkgd.min.js')}}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src='{{ asset('website/js/perfect-scrollbar.min.js')}}'></script>
<script src='{{ asset('website/js/jquery.shuffle.min.js')}}'></script>
<script src='{{ asset('website/js/masonry.pkgd.min.js')}}'></script>
<script src='{{ asset('website/js/owl.carousel.min.js')}}'></script>
<script src="{{ asset('website/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('website/js/validator.js')}}"></script>
<script src="{{ asset('website/js/main.js')}}"></script>
<script src="{{ asset('website/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ asset('website/plugins/notifications/js/notifications.min.js') }}"></script>
<script src="{{ asset('website/plugins/notifications/js/notification-custom-script.js') }}"></script>

<script src="{{ asset('website/plugins/news-ticker/js/jquery.min.js') }}"></script>
<script src="{{ asset('website/plugins/news-ticker/js/acmeticker.js') }}"></script>
<script>
    var app_url = "{{url('/')}}";
    var lang = "{{app()->getLocale()}}";
</script>
<script src="{{ asset('website/js/front.js')}}"></script>

<script>
    jQuery(document).ready(function ($) {
        $('.my-news-ticker').AcmeTicker({
            type:'marquee',/*horizontal/horizontal/Marquee/type*/
            direction: 'right',/*up/down/left/right*/
            speed: 0.05,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
            controls: {
                toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
            }
        });
    })

</script>
