<div class="page-section">
    <div class="container">
      <h1 style="font-size:2.5rem;" class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action ="{{url('appointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

            <option value="">---Select Doctor---</option>
             @foreach($doctor as $doctors)
              <option value="{{$doctors->name}}">Dr.{{$doctors->name}} ---Speciality--- {{$doctors->speciality}}</option>
              @endforeach

            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
          <div class="col-12 text-center mt-4 wow zoomIn">
            <input class="btn btn-success" style="background-color: #96C93D !important;" type="submit"value="Submit">
            </div>

        </div>



      </form>
    </div>
  </div>
