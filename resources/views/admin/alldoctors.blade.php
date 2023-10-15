

<!DOCTYPE html>
<html lang="en">
  <head>
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

        <div style="padding-top:100px">
            <table>
                <tr style="background:darkorange">
                    <th style="padding:20px">Doctor Name</th>
                    <th style="padding:20px">Phone</th>
                    <th style="padding:20px">Speciality</th>
                    <th style="padding:20px">Room No</th>
                    <th style="padding:20px">Image</th>
                    <th style="padding:20px">Delete</th>
                    <th style="padding:20px">Update</th>
                </tr>

                @foreach($data as $doctors)

                <tr align="center">
                    <td>{{$doctors->name}}</td>
                    <td>{{$doctors->phone}}</td>
                    <td>{{$doctors->speciality}}</td>
                    <td>{{$doctors->room}}</td>
                    <td><img height="100px"width="100px" src="doctorimage/{{$doctors->image}}" alt=""></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure delete the data?')" href="{{url('deletedoctor',$doctors->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctors->id)}}">Update</a></td>
                </tr>

                @endforeach
            </table>
        </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

