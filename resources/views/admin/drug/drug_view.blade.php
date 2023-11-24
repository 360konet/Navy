@include('admin.layout.app')
<style>
     .report-card {
            width: 700px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .report-card-header {
            background-color: #3498db;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .report-card-body {
            padding: 20px;
        }

        .medicine-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .medicine-details {
            margin-bottom: 15px;
            color: #555;
        }

        .report-card-footer {
            background-color: #ecf0f1;
            padding: 10px;
            text-align: center;
        }

        .delete-button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
</style>

<!-- strat content -->
<div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

<!-- congrats & summary -->
<div class="grid grid-cols-3 lg:grid-cols-1 gap-5">
  <!-- congrats -->
<div class="card col-span-1">

<div class="card-body h-full flex flex-col justify-between">

    <div>
        <h1 class="text-lg font-bold tracking-wide">Drug Report</h1>
    </div>
    <img src="drug1.jpg">

    <div class="flex flex-row mt-10 items-end">

        <div class="flex-1">
            <p class="mt-3 mb-4 text-xs text-gray-500"> Combating Drug Trafficking.</p>
            <a href="{{url('/drug-trafficking')}}" style="background-color:red" class="btn-shadow py-3">
                Close
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
        <h1 class="font-extrabold text-lg">{{$drugs->created_at}}</h1>
        <a href="#" onclick="printReport()" class="btn-gray text-sm">Print Report</a>
    </div>

    <div class="report-card" id="reportCard">
    <div class="report-card-header">
    {{$drugs->drug_type}}
    </div>
    <div class="report-card-body">
        <div class="medicine-name">Cordinates: Latitude({{$drugs->latitude_degrees}}<sup>0</sup> {{$drugs->latitude_minutes}}<sup>1</sup> {{$drugs->latitude_cardinal}})  Longitude({{$drugs->longitude_degrees}}<sup>0</sup> {{$drugs->longitude_minutes}}<sup>1</sup> {{$drugs->longitude_cardinal}})</div>
        <div class="medicine-details">
            <p><strong>Country:</strong> {{$drugs->country}}</p>
            <p><strong>Incident Date:</strong> {{$drugs->date}}</p>
            <p><strong>Incident Time:</strong> {{$drugs->time}}</p>
            <p><strong>Description:</strong> {{$drugs->incident}}</p>
            <p><strong>Drug Type:</strong> {{$drugs->drug_type}}</p>
            <p><strong>Culprit Vessel:</strong> {{$drugs->culprit_vessel}}</p>
            <p><strong>Vessel Category:</strong> {{$drugs->vessel_category}}</p>
            <p><strong>Total Tonnage:</strong> {{$drugs->total_tonnage}}kg</p>
            <p><strong>Recorded On:</strong> {{$drugs->created_at}}</p>
            <p><strong>Updated On:</strong> {{$drugs->updated_at}}</p>
        </div>
    </div>
    <div class="report-card-footer">
        &copy; Ghana Navy
    </div>
</div>

    

</div>
    

</div>
<!-- end right -->

</div>


  
</div>
<!-- end congrats & summary -->


<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>
<!-- end script -->

<script>
    function printReport() {
        var printWindow = window.open('', '_blank');
        var reportCardContent = document.getElementById('reportCard').outerHTML;

        printWindow.document.body.innerHTML = reportCardContent;

        // Print the new window
        printWindow.print();
    }
</script>


</body>
</html>
