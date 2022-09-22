<div class="acme-news-ticker">
    <div class="acme-news-ticker-label">اخر الاخبار</div>
    <div class="acme-news-ticker-box">
        <ul class="my-news-ticker">
            @foreach($news as $new)
                <li>
                    <a href="#">{{$new->notes}}</a>
                </li>
                <li style="text-align: center; vertical-align: middle">
                    <img src="{{asset('website/img/logos/logo7.png')}}" style="vertical-align:middle; height: 20px;width: 20px"></img>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
        <span class="acme-news-ticker-arrow acme-news-ticker-prev"></span>
        <span class="acme-news-ticker-pause"></span>
        <span class="acme-news-ticker-arrow acme-news-ticker-next"></span>
    </div>
</div>
