@include('admin.layout.app')

  <!-- strat content -->
 
  <div class="bg-gray-100 flex-1 p-6 md:mt-16 grid grid-cols-8"> 
    
    <div class="col-span-2 bg-white border rounded p-6 mr-8">

    <center><img src="user.png" height="100px" width="100px" alt="User logo"></center>
    <hr class="my-6">

    <ul>
    <form action="{{url('/add-user')}}" method="Post">
    @csrf
    <li class="my-5 mt-0">
            <input type="text" placeholder="Enter Username" name="name" style="width: 100%; padding: 1px 20px;  margin: 8px 0;  box-sizing: border-box;border: 2px solid black; border-radius: 4px; ">
        </li>

        <li class="my-5 mt-0">
            <input placeholder="Enter Email" type="email" name="email" style="width: 100%; padding: 1px 20px;  margin: 8px 0;  box-sizing: border-box;border: 2px solid black; border-radius: 4px; ">
        </li>

        <li class="my-5 mt-0">
            <input placeholder="Enter Phone/Telephone" type="text" name="phone_number" style="width: 100%; padding: 1px 20px;  margin: 8px 0;  box-sizing: border-box;border: 2px solid black; border-radius: 4px; ">
        </li>

        <li class="my-5 mt-0">
            <input placeholder="Enter Password" type="password" name="password" style="width: 100%; padding: 1px 20px;  margin: 8px 0;  box-sizing: border-box;border: 2px solid black; border-radius: 4px; ">
        </li>


        <li class="my-5 mt-0">
            <a class="btn-indigo text-left" href="#">
                <button type="submit" value="submit">Add User</button>
            </a>
        </li> 
</form>    
        
    </ul>
</div>
    <div class="col-span-6 card flex flex-col">

    <div class="px-3 border-b">
        <h6>System Users</h6>
    </div>

    <div class="flex-1 flex flex-col">

    @foreach($users as $user)
    <!-- message -->
    <div class="flex items-center shadow-xs transition-all duration-300 ease-in-out p-5 hover:shadow-md">   
        <h1 class="ml-3">{{$user->name}}</h1>    
        <p class="ml-3 flex-1 text-xs">{{$user->email}}</p>    
        <p class="font-bold text-gray-900"><button style="background-color:red;color:white; height: 50px; width: 100px; raduis:3px"><a href="{{url('/remove-user-'.$user->id)}}">Remove</a></button</p>
    </div>
    <!-- message -->
    @endforeach
 

    </div>
</div>

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>
<!-- end script -->

</body>
</html>
