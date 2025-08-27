<style>
    .service-item {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        padding: 1rem;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .fixed-size {
        width: 100%;
        height: 200px;
        object-fit: contain;
        background: #f9f9f9; /* adds contrast if image doesn’t fill the box */
        border-radius: 6px;
        padding: 10px; /* optional: gives space around image */
    }


    .de {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .desc-truncate {
        flex-grow: 1;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    .desc-truncate:hover {
        color: blue;
    }

    .btn-slide {
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1rem;
        color: #fff;
        border-radius: 4px;
        font-size: 0.9rem;
        transition: background 0.3s ease;
    }

    .btn-slide i {
        margin-right: 6px;
    }

    .btn-slide:hover {
        color: #fff;
        text-decoration: none;
    }

    .clickable {
        text-decoration: none;
        color: inherit;
        height: 100%;
        display: block;
    }
</style>

<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="text-secondary text-uppercase">Our Services</h2>
        </div>
        <div class="row g-4">
            @foreach ($shutters as $shutter)
            <div class="col-md-6 col-lg-4 wow fadeInUp de" data-wow-delay="0.3s">
                <a class="clickable" href="{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}">
                    <div class="service-item p-4">
                        @if($shutter->photos->first())
                            <img class="img-fluid fixed-size" src="{{ Storage::url($shutter->photos->first()->image_url) }}" alt="{{ $shutter->name }}">
                        @endif
                        <h4 class="mt-3 mb-2">{{ $shutter->name_out }}</h4>
                        <p class="desc-truncate">{{ strip_tags($shutter->desc_out) }}</p>
                        <a class="btn-slide mt-auto" href="{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}">
                            <i class="fa fa-arrow-right"></i><span>Read More</span>
                        </a>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
