@if ($review->star == 0)
<div class="pl-3 my-3 row align-items-center">
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
</div>
@endif @if ($review->star == 1)
<div class="pl-3 my-3 row align-items-center">
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
</div>
@endif @if ($review->star == 2)
<div class="pl-3 my-3 row align-items-center">
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
</div>
@endif @if ($review->star == 3)
<div class="pl-3 my-3 row align-items-center">
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star"></i>
    <i data-feather="star"></i>
    <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
</div>
@endif @if ($review->star == 4)
<div class="pl-3 my-3 row align-items-center">
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star"></i>
    <p class="badge badge-primary my-2 mx-2">{{ $reviews->count() }}</p>
</div>
@endif @if ($review->star == 5)
<div class="pl-3 my-3 row align-items-center">
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow;"></i>
    <i data-feather="star" style="fill: yellow"></i>
    <p class="badge badge-primary">{{ $reviews->count() }}</p>
</div>

@endif
