<div class="block-slide-main slide-opt-1">
    <!-- slide -->
    <div class="owl-carousel dotsData"
         data-nav="true"
         data-dots="true"
         data-margin="0"
         data-items='1'
         data-autoplayTimeout="700"
         data-autoplay="true"
         data-loop="true">
        @foreach($sliders as $index=>$slider)

        <div class="item  @if($index==0) item{{$index+2}}
        @elseif ($index+1) item{{$index+1}} @else item{{$index+3}} @endif"
             @if(file_exists('storage/'.$slider->image) && $slider->image !== '' && $slider->image !== null)
             style="background-image: url({{asset('storage/'.$slider->image)}});" @else style="background-image: url({{asset('frontend/images/media/index1/slide2.jpg')}});" @endif
             data-dot="{{$index+1}}">
            <div class="description">
                <span class="title">{{$slider->title ?? ""}} </span>
                @if(!empty($slider->caption))<span class="subtitle">{{$slider->caption}}</span>@endif
                <span class="des"> ENJOY UP TO 35% OFF</span>
                <a href="" class="btn">SHOP NOW</a>
            </div>
        </div>
{{--        <div class="item item1" style="background-image: url({{asset('frontend/images/media/index1/slide1.jpg')}});" data-dot="2">--}}
{{--            <div class="description">--}}
{{--                <span class="title">We’ve Take A Further </span>--}}
{{--                <span class="subtitle">20% Off <br> Accessories</span>--}}
{{--                <a href="" class="btn">shop now</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item item3" style="background-image: url({{asset('frontend/images/media/index1/slide3.jpg')}});"  data-dot="3">--}}

{{--            <div class="description">--}}
{{--                <span class="title">Spring Fashion  </span>--}}
{{--                <span class="subtitle">Fashion Colection Style 2016 </span>--}}
{{--                <a href="" class="btn">Now In Stock</a>--}}
{{--            </div>--}}
{{--        </div>--}}
            @endforeach
    </div> <!-- slide -->
</div><!-- block slide top -->
