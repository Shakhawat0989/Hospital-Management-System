  <div class="page-section">
    <div class="container">
        <div>

                <h1 style="font-size:2.5rem;" class="text-center mb-5 wow fadeInUp !important">Our Doctors</h1>


        </div>


      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

      @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height:300px" src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
          </div>
        </div>
     @endforeach



      </div>
    </div>
  </div>
