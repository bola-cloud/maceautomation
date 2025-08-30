<div>
    <style>
        .overflow-hidden.mb-4 {
            text-align: center;
        }img.img-fluid.maix {
            width: 70%;
            height: 415px;
        }

        .section-title {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            position: relative;
        }



        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 10px;
        }

        .image-item {
            flex: 1;
            margin: 5px;
            height: 200px; /* Default height */
        }

        .image-item img {
            width: 92%;
            height: 240px;
            display: block;
        }

        .image-grid.single-image .image-item {
            height: auto;
        }


        img.auto {
            height: auto;
        }
    </style>
 @section("title", $shutter->name)
 @section('desc', strip_tags($shutter->desc))




    <div class="container-fluid p-0 position-relative d-flex justify-content-center" style="height: 500px; overflow: hidden; ">
        <img src="{{ Storage::url($shutter->photos->first()->image_url) }}"
            class="h-100 object-fit-cover"
            alt="{{ $shutter->name }}"
            style="filter: brightness(60%); width: 90%; height: 100%;background-position: center;">

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-3 fw-bold mb-3 animated slideInDown text-light">{{ $shutter->name }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="">{{ $shutter->tag }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-12  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">

                        <h4 class="mb-3">{{ $shutter->name }}</h4>
                        <p>{!! $shutter->desc !!}</p>
                        <p>{!! $shutter->key_features !!}</p>
                        @if($photosshuttersapplication && $photosshuttersapplication->isNotEmpty())
                        <section class="garage-door-applications">
                            <div class="container">
                                <h2 class="section-title">Applications For {{ $shutter->name }} </h2>
                                <div class="image-grid">
                                    @foreach($photosshuttersapplication as $photo)
                                        <div class="image-item">
                                            <img src="{{ Storage::url($photo->image_url) }}" alt="{{ $shutter->name }}">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </section>
                        @endif

                        @if($photosshutterslast && $photosshutterslast->isNotEmpty())
                        <br>
                        <br>
                        <br>
                        <br>
                        <section class="garage-door-applications">
                            <div class="container">
                                <h2 class="section-title">Gallary of Our Recent Work For {{ $shutter->name }} </h2>
                                <div class="image-grid">

                                    @foreach($photosshutterslast as $photo)
                                    <div class="image-item"><img src="{{ Storage::url($photo->image_url) }}" alt="{{$shutter->name}}"></div>
                                    @endforeach

                                </div>
                            </div>
                        </section>
                        @endif

                        <br>
                        <br>
                        <br>
                        <br>
                        <h5>Features of {{ $shutter->name }}:</h5>
                        <ul>
                           <p>{!!$shutter->features!!}</p>
                        </ul>
                        <p>For more details on {{ $shutter->name }}, contact us using the information below.</p>
                        <a class="btn btn-primary mt-3" href="{{ route('contact') }}">Get a Quote</a>

                        @if($photosshuttershardware && $photosshuttershardware->isNotEmpty())
                        <section class="garage-door-applications">
                            <div class="container">
                                <h2 class="section-title">Hardware For {{ $shutter->name }}</h2>
                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="image-grid {{ $photosshuttershardware->count() == 1 ? 'single-image' : '' }}">
                                    @foreach($photosshuttershardware as $photo)
                                        <div class="image-item"><img class="auto" src="{{ Storage::url($photo->image_url) }}" alt="{{ $shutter->name }}"></div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    @endif


                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="container-xxxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Quote!</h1>
                    <p class="mb-5">
                        Discover the ultimate in security and convenience with our state-of-the-art rolling shutters and sliding door systems. Perfect for residential and commercial properties, our shutters offer protection, energy-efficiency, and smooth operation. Request a free quote for supply, installation, or maintenance.
                    </p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone text-primary me-3 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0"><a href="tel:+0000000000" class="text-primary">+000 000 0000</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-12">
                    <livewire:user.items.contact-component />
                </div>
            </div>
        </div>
    </div>
    <livewire:user.service-component/>


</div>
