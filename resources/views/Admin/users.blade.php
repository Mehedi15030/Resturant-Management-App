<x-app-layout>
  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include("Admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
      
  @include("Admin.Navebar")

  <div style="position: relative; top:60px ; right:- 150px ">
        <table bgcolor="gray" border="3px">
            <tr>
                 <th style="padding: 30px">Name</th>
                 <th style="padding: 30px">Email</th>  
                 <th style="padding: 30px">Action</th>  
                 
             </tr>
             @foreach($data as $data)
             <tr align="center">
                 <td>{{$data->name}}</th>
                 <td>{{$data->email}}</td>  
                 @if($data->usertype=="0")
                 <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>  
                 @else
                 <td>>Not Allowed</td>
                 @endif
             </tr>
             @endforeach

        </table>
  </div>


</div>
        
  @include("Admin.adminscript")  
   
  </body>
</html>