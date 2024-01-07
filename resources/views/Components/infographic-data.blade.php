<section class="fun-fact-area center white relative padding-100-70" style="
    background: rgba(0, 0, 0, 0) url('../{{$infographicBgImageData[0]->image}}') no-repeat scroll center center / cover;" id="fact">
    <div class="area-bg" data-stellar-background-ratio="0.6"></div>
    <div class="container">
        <div class="row">
            @foreach ($infographicData as $infographic)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="font60 xs-font26"><span class="counter">{{$infographic->digit}}</span>{{$infographic->suffix}}</h3>
                    <p class="font600">{{$infographic->description}}</p>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</section>
