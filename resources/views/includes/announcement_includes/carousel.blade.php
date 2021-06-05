<div id="carousel_img" class="carousel slide col">
    <div class="carousel-inner ">
        <div id="carousel_imgControls" class="carousel slide col">
            <div class="carousel-item auto active">
                <img class="img-fluid" src="{{$photos[0]}}" alt="...">
            </div>
            @for($i=1; $i<count($photos); $i++)
                @if($photos[$i]!='http://127.0.0.1:8000/storage')
                <div class="carousel-item auto">
                    <img class="img-fluid" src="{{$photos[$i]}}" alt="...">
                </div>
                @endif
            @endfor
        </div>
    </div>
    <a class="carousel-control-next no_bg my-auto ml-5" href="#carousel_imgControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <a class="carousel-control-prev no_bg my-auto mr-5" href="#carousel_imgControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
</div>
