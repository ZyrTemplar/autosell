<section class="card-car car-block section-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <span>ВАС МОЖУТЬ ЗАЦІКАВИТИ</span>
            </div>
        </div>
        <div id="interest-tab" class="row"><div class="col">
                <div id="pills-tabContent" class="tab-content" style="min-height: 413px;">
                    <div id="all" role="tabpanel" aria-labelledby="all-tab" class="tab-pane fade show active">
                        <div id="all-cars-list" class="row">
                            @include('includes.carMini',[$id=$id1])
                            @include('includes.carMini',[$id=$id2])
                            @include('includes.carMini',[$id=$id3])
                            @include('includes.carMini',[$id=$id4])
                            <div class="row mx-auto">
                                <div class="button-block">
                                    <a class="icon-btn catalog-icon" href="/auto">Каталог авто</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="align-self-center line" color=#454545>
