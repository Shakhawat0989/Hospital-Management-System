

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
            <table style="border:2px solid green">
                <tr style="background:darkgreen">
                    <th style="padding:20px">Customer Name</th>
                    <th style="padding:20px">Email</th>
                    <th style="padding:20px">Phone</th>
                    <th style="padding:20px">Doctor Name</th>
                    <th style="padding:20px">Date</th>
                    <th style="padding:20px">Message</th>
                    <th style="padding:20px">Status</th>
                    <th style="padding:20px">Approved</th>
                    <th style="padding:20px">Cancled</th>
                    <th style="padding:20px">Send Mail</th>
                </tr>
                @foreach($data as $appoint)
                <tr align="center" style="border:1px solid green">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td><a class="btn btn-success" onclick="return confirm('Are you sure to approve this appointment?')" href="{{url('approved',$appoint->id)}}">Approve</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure to cancle this appointment?')" href="{{url('cancle',$appoint->id)}}">Cancle</a></td>
                    <td><a class="btn btn-primary"  href="{{url('mailsend',$appoint->id)}}">Send Mail</a></td>

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

