<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        
    {{-- <div class="menu-item-carousel"> --}}
        @foreach ($data as $item)
        <div class="col-lg-4">
                
                <div class="item p-2">
                    <form action="{{url('/addcart',$item->id)}}" method="post">
                        @csrf
                    <div style="background-image:url('/foodimage/{{$item->image}}');background-size:cover;object-fit:contain;" class='card'>
                        <div class="price"><h6>${{$item->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$item->title}}</h1>
                          <p class='description'>{{$item->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                    <div class="addcart-cus">
                        <input type="number" name="quantity" min="1" value="1" style="width:80px;border:none;outline:none">
                        <input id="add-cus" type="submit" value="add cart">
                    </div>
                </div>
            </form>
        </div>
        @endforeach
    </div>
</div>
</div>
</div>
</section>