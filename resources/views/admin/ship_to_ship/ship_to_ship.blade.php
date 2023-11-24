@include('admin.layout.app')

<!-- strat content -->
<div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

<!-- congrats & summary -->
<div class="grid grid-cols-3 lg:grid-cols-1 gap-5">
  <!-- congrats -->
<div class="card col-span-1">

<div class="card-body h-full flex flex-col justify-between">

    <div>
        <h1 class="text-lg font-bold tracking-wide">Ship To Ship</h1>
        <p class="text-gray-600 mt-2">Record keeping and tracking</p>
    </div>
    <img src="ship.jpg">

    <div class="flex flex-row mt-10 items-end">

        <div class="flex-1">
            <p class="mt-3 mb-4 text-xs text-gray-500">Large, Heavily Armed Surface Ships </p>
            <a href="{{url('/ship-to-ship-form')}}" class="btn-shadow py-3">
                Add Record
            </a>
        </div>

        <div class="flex-1 ml-10 w-32 h-32 lg:w-auto lg:h-auto overflow-hidden">
            <img class="object-cover" src="logo.jpg">
        </div>

    </div>

</div>

</div>
<!-- end congrats -->

<div class="card" style="width:800px">
<div class="card-body">
    <div class="flex flex-row justify-between items-center">
        <h1 class="font-extrabold text-lg">Report</h1>
        <a href="#" onclick="printTable()" class="btn-gray text-sm">Print All</a>
    </div>

    <table id="yourTableId" class="table-auto w-full mt-5 text-right">

        <thead>
            <tr>
                <td class="py-4 font-extrabold text-sm text-left">Cordinate</td>
                <td class="py-4 font-extrabold text-sm">Country</td>
                <td class="py-4 font-extrabold text-sm">Vessel Type</td>
                <td class="py-4 font-extrabold text-sm">Action</td>
            </tr>
        </thead>

        <tbody>

        @foreach($ships as $ship)
            <!-- item -->
            <tr class="">
                <td class="py-4 text-sm text-gray-600 flex flex-row items-center">Latitude: ({{$ship->latitude_degrees}}<sup>0</sup> {{$ship->latitude_minutes}}<sup>1</sup> {{$ship->latitude_cardinal}}), Longitude:({{$ship->longitude_degrees}}<sup>0</sup> {{$ship->longitude_minutes}}<sup>1</sup> {{$ship->longitude_cardinal}})</td>
                <td class="py-4 text-xs text-gray-600">{{$ship->country}}</td>
                <td class="py-4 text-xs text-gray-600">{{$ship->vessel_type}}</td>
                <td class="py-4 text-xs text-gray-600"> <div class="dropdown">
                        <button class="btn-gray">More Info</button>
                        <div class="dropdown-content">
                            <a href="{{url('/edit-ship-to-ship-form-'.$ship->id)}}">Edit</a>
                            <a href="{{url('/view-ship-to-ship-'.$ship->id)}}">View</a>
                            <a href="#" onclick="confirmDelete('{{url('/delete-ship-to-ship-'.$ship->id)}}')">Delete</a>
                            <!-- Add more options as needed -->
                        </div>
                    </div>
                </td>
            </tr>
            <!-- end item -->
        @endforeach   

            

        </tbody>

    </table>

</div>
    

</div>
<!-- end right -->

</div>


  
</div>
<!-- end congrats & summary -->



</div>
<!-- end content -->

</div>
<!-- end wrapper -->

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>
<!-- end script -->

<script>
    function confirmDelete(url) {
        if (confirm("Are you sure you want to delete this record?")) {
            window.location.href = url;
        }
    }
</script>

<script>
    function printTable() {
        // Clone the table and create a new window
        var printWindow = window.open('', '_blank');
        var clonedTable = document.getElementById('yourTableId').cloneNode(true);

        // Remove the last column ('Action') from the cloned table
        var lastColumnIndex = clonedTable.rows[0].cells.length - 1;
        for (var i = 0; i < clonedTable.rows.length; i++) {
            clonedTable.rows[i].deleteCell(lastColumnIndex);
        }

        // Append the cloned table to the new window
        printWindow.document.body.appendChild(clonedTable);

        // Print the new window
        printWindow.print();
    }
</script>

</body>
</html>
