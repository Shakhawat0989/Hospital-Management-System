
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">


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

                <form action="{{url('sendmail',$data->id)}}" method="POST">
                    @csrf
                    <div style="padding:15px;">
                        <label for="">Greeting</label>
                        <input type="text" name="greeting" style="color:black;" required="">
                    </div>

                     <div style="padding:15px;">
                        <label for="">Body</label>
                        <input type="text" name="body" style="color:black;" required="">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Action Text</label>
                        <input type="text" name="actiontext" style="color:black;" required="">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Action URL</label>
                        <input type="text" name="actionurl" style="color:black;" required="">
                    </div>

                    <div style="padding:15px;">
                        <label for="">End Part</label>
                        <input type="text" name="endpart" style="color:black;" required="">
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
