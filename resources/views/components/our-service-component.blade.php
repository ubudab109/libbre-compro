<div class="item service position-relative">
    <div class="card card-service h-100">
        <div class="card-body">
            <img class="img-center" src="{{$image}}" width="70"
                alt="icon.png">
            <div class="col-12 text-center mt-4">
                <h5 class="text-white text-bold mb-3">
                    @lang($serviceName)
                </h5>
                <p class="text-center text-white">
                    @lang($desc)
                </p>
                <div class="icon-right">
                    <button type="button" data-bs-toggle="modal" data-bs-target="{{$modal}}">
                        <img src="{{asset('/assets/img/iconbutton.png')}}" width="35" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>