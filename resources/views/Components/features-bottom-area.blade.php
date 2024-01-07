<section class="section-padding">
    <div class="container">
        <div class="row">
            @foreach ($featuresBottomData as $featuresBottom)
                
            @endforeach
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="text-center wow fadeIn">
                    <h2 class="xs-font20">{{$featuresBottom->title}}</h2>
                    <p>
                        {{$featuresBottom->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
