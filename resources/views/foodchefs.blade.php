<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best ingredients for you</h2>
                </div>
            </div>
        </div>
        
            
       
        <div class="row">
            @foreach ($data2 as $item)
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="img-chef">
                        <img  src="chefimage/{{$item->image}}" alt="Chef #1">
                    </div>
                    <div class="dwn-cnt">
                        <h4>{{$item->name}}</h4>
                        <span>{{$item->speciality}}</span>
                    </div>
                </div>
            </div>
            
        @endforeach
        </div>
    </div>
</section>