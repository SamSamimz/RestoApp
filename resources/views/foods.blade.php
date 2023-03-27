    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach ($foods as $food)

                    <div class="item">
                        <div class='card' style="background-image: url('{{'storage/foods/'.$food->image}}')">
                            <div class="price"><h6>{{$food->price}} $</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$food->title}}</h1>
                              <p class='description'>{{$food->description}}</p>
                              <div class="main-text-button">
                                <a href="{{route('add.cart',$food)}}" class="btn btn-warning">Add to Cart</a>
                              </div>
                            </div>
                        </div>
                    </div>
                                            
                    @endforeach
   
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
