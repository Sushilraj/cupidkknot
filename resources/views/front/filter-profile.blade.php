@if($user)
@foreach($user as $user)
<div class="col">
    <div class="product-standard">
        <div class="standard-media">
            <a class="standard-image" href="product-video.html">    <img src="{{asset('assets/images/product/user.png')}}" alt="user">
            </a>
        </div>
        <div class="standard-content">
            <h4 class="standard-name">
                <a href="#">{{$user['name']}}</a>
            </h4>
            <h5 class="standard-price">
                <p>Income: {{$user['anual_incom']}}</p>
            </h5>
            <h5 class="standard-price">
                <p>Age: {{$user['age']}}</p>
            </h5>
            <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore quis corrupti nemo ipsa ratione culpa porro vitae.</p>
            <div class="standard-action-group">
                <button class="product-add" title="Add to Cart"><i class="fas fa-heart"></i><span>Send Intrest</span></button>
                <button class="standard-wish wish" title="Add to Wishlist"><i class="fas fa-heart"></i><span>add to filter</span></button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif