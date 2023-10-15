

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    @include('admin.css')

    </style>

  </head>
  <body>
    <div class="container-scroller">


      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
     <div class="container-fluid page-body-wrapper">

       <div class="container" align="center" style="padding-top:100px; padding-right:300px;">

                @if(session()->has('message'))

                <div class="alert alert-success" style="margin-top:-80px;margin-bottom:100px">
                    <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}

                </div>

                @endif


            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px;">
                    <label style="padding-right:15px" for="">Doctor Name</label>
                    <input type="text" name="name" value="{{$data->name}}" style="color:black;margin-left:30px;" palceholder="Write doctor name here" required="">
                </div>

                <div style="padding:15px;">
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="{{$data->phone}}" style="color:black;margin-left:95px;" palceholder="Write doctor name here" required="">
                </div>

                <div style="padding:15px;">
                    <label for="">Speciality</label>
                    <input type="text" name="speciality" value="{{$data->speciality}}" style="color:black;margin-left:70px;" palceholder="Write doctor name here" required="">
                </div>
                <div style="padding:15px;">
                    <label for="">Room No</label>
                    <input type="text" name="room" value="{{$data->room}}" style="color:black;margin-left:70px;" palceholder="Write doctor name here" required="">
                </div>

                <div style="padding:15px;">
                    <label for="">Old Image</label>
                    <img height="100px" width="100px" src="doctorimage/{{$data->image}}" alt="">
                </div>

                <div style="padding:15px;">
                    <label for="">New Image</label>
                    <input type="file" name="image" style="color:black;margin-left:70px;" palceholder="Write doctor name here">
                </div>

                <div style="padding:15px;">

                    <input class="btn btn-success" type="submit"value="Submit">
                </div>

            </form>

       </div>



     </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
