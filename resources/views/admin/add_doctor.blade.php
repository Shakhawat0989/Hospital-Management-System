
<!DOCTYPE html>
<html lang="en">
  <head>


   <style type="text/css">
    label{
      display:inline-block;
      width:250px;
    }
   </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
         <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top:150px; padding-right:300px;">

                @if(session()->has('message'))

                <div class="alert alert-success" style="margin-top:-80px;margin-bottom:100px">
                    <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}

                </div>

                @endif

                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" name="name" style="color:black;" palceholder="Write doctor name here" required="">
                    </div>

                     <div style="padding:15px;">
                        <label for="">Phone Number</label>
                        <input type="text" name="number" style="color:black;" palceholder="Write the number here" required="">
                    </div>


                     <div style="padding:15px;">
                        <label for="">Speciality</label>
                        <select name="speciality" style="color:black;width:200px">
                          <option>Select one</option>
                          <option value="Skin">Skin</option>
                          <option value="Heart">Heart</option>
                          <option value="Eye">Eye</option>
                          <option value="Nose">Nose</option>
                        </select>
                    </div>

                     <div style="padding:15px;">
                        <label for="">Room No</label>
                        <input type="text" name="room" style="color:black;" palceholder="Write room no" required="">
                    </div>

                    <div style="padding:15px;padding-left:118.25px">
                        <label for="">DoctorImage</label>
                        <input type="file" name="image" required="">
                    </div>

                    <div style="padding:15px;padding-left:265px;">

                        <input type="submit" class="btn btn-success" value="Submit"style="height:40px;width:200px">
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
