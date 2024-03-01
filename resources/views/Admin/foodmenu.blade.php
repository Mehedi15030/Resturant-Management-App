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
           <form action ="{{url('/uploadfood')}}" method ="post" enctype="multipart/form-data">
            @csrf
               <div>
                      <lable>Title</lable>
                      <input style="color:red;" type="text" name="title" placeholder="Write a title" required>
               </div>
               <div>
                      <lable>Price</lable>
                      <input style="color:red;" type="num" name="price" placeholder="price" required>
               </div>
               <div>
                      <lable>Image</lable>
                      <input style="color:red;" type="File" name="image"  required>
               </div>
               <div>
                      <lable>Discription</lable>
                      <input style="color:red;"type="text" name="discription" placeholder="Discription" required>
               </div>
               <div>
                      
                      <input style="color:red;" type="submit" value="Save">
               </div>

</form>

</div>
  
</div>
  @include("Admin.adminscript")  
   
  </body>
</html>