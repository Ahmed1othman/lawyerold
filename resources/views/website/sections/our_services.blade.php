<section data-id="our-services" class="animated-section">


    <div class="page-title">
            <h2>{{__('site/app.our_services')}}</h2>
    </div>

    <div class="section-content">
        <div class="white-space-30"></div>
        <div class="row">
            @foreach($services as $service)
            <div class="info-block-w-icon col-md-6">
                <div class="ci-icon">
                    <i class="fa {{$service->icon}}"></i>
                </div>
                <div class="ci-text">
                    <h4>{{$service->title}}</h4>
                    <p>{!! $service->notes !!}</p>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End of Services -->

        <div class="white-space-50"></div>

        <!-- Testimonials -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>{{__('site/app.our_team')}}</h3>
                </div>
            </div>
        </div>
        <div class="white-space-40"></div>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="testimonials owl-carousel">
                    @foreach($employees as $employee)
                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                            <div class="img">
                                <img src="{{asset($employee->image)}}" alt="{{asset($employee->name)}}">
                            </div>
                            <div class="author-info">
                                <h4 class="author">{{$employee->name}}</h4>
                                <h5 class="company">{{$employee->title}}</h5>
                                <div class="icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End of Testimonial 1 -->
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End of Testimonials -->

        <div class="white-space-50"></div>

        <!-- Clients -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>{{__('site/app.our_clients')}}</h3>
                </div>
            </div>
        </div>

        <div class="white-space-40"></div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="clients owl-carousel">
                    @foreach($clients as $client)
                        <div class="client-block" style="height: 150px; width: 150px">
                            <img src="{{asset($client->image)}}" class="img-responsive img-thumbnail" style="padding: 3px;border: solid 2px rgb(101 101 101);border-radius: 5%; height: 100%; width: 100%; filter: grayscale(40%);" alt="{{$client->name}}">
                        </div>
                    @endforeach

                </di
            </div>
        </div>
        <!-- End of Clients -->

        <div class="white-space-50"></div>

        <div class="white-space-50"></div>

        <!-- Fun Facts -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">

                <div class="block-title">
                    <h3>{{__('site/app.statistics')}}</span></h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="fun-fact gray-default">
                    <i class="lnr lnr-heart"></i>
                    <h4>{{__('site/app.our_clients')}}</h4>
                    <span class="fun-fact-block-value">{{\App\Models\Client::count()}}</span>
                    <span class="fun-fact-block-text"></span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="fun-fact gray-default">
                    <i class="lnr lnr-clock"></i>
                    <h4>{{__('site/app.working_hours')}}</h4>
                    <span class="fun-fact-block-value">24/7</span>
                    <span class="fun-fact-block-text"></span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 ">
                <div class="fun-fact gray-default">
                    <i class="lnr lnr-star"></i>
                    <h4>{{__('site/app.visitors')}}</h4>
                    <span class="fun-fact-block-value">{{\App\Models\Visitor::count()}}</span>
                    <span class="fun-fact-block-text"></span>
                </div>
            </div>
        </div>
        <!-- End of Fun Facts -->
    </div>
    </div>
</section>
