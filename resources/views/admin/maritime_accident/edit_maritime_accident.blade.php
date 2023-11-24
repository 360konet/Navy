@include('admin.layout.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incident Report Form</title>
    <style>
       

        form {
            width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 30px;
        }

        .form-section {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .select1 {
            height: 40px;
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .select2 {
            height: 40px;
            width: 30%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .latitude-inputs {
            display: flex;
        }
        
        .latitude-inputs input {
            flex: 1;
            margin-right: 5px; /* Adjust as needed for spacing */
        }
        
    </style>
</head>
<body>

<form method="POST" action="{{url('/edit-maritime-accident-'.$maritime->id)}}">
    @csrf
    <center><img src="{{asset('logo.jpg')}}" height="100px" width="100px"></center>
    <h2>Maritime Accident Update Form</h2> 

    <!-- Submit Button -->
    <button type="submit" style="float:right" value="submit">Update</button><br>

    <!-- Section 1: Country Input -->
    <div class="form-section">
        <label for="country">Country:</label>
        <select name="country" required class="select1">
                <option value="{{$maritime->country}}">{{$maritime->country}}</option>
                <option value="">--Select Country--</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
        </select>
    </div>

    <!-- Section 2: Latitude and Longitude Input -->
    <div class="form-section">
        <label for="latitude">Latitude:</label>
        <div class="latitude-inputs">
        <!-- Degrees Input -->
        <input type="number" value="{{$maritime->latitude_degrees}}" id="latitude_degrees" name="latitude_degrees" required placeholder="Degrees">

        <!-- Minutes Input -->
        <input type="number" id="latitude_minutes" value="{{$maritime->latitude_minutes}}" name="latitude_minutes" required placeholder="Minutes">

        <!-- Cardinal Input -->
        <select class="select2" name="latitude_cardinal" required>
            <option value="{{$maritime->latitude_cardinal}}">{{$maritime->latitude_cardinal}}</ooption>
            <option value="">--Select Cardinal Point--</option>
            <option value="North">North</option>
            <option value="South">South</option>
        </select>
        </div>

        <label for="longitude">Longitude:</label>
        <div class="latitude-inputs">
        <!-- Degrees Input -->
        <input type="number" id="latitude_degrees" value="{{$maritime->longitude_degrees}}" name="longitude_degrees" required placeholder="Degrees">

        <!-- Minutes Input -->
        <input type="number" id="latitude_minutes" value="{{$maritime->longitude_minutes}}" name="longitude_minutes" required placeholder="Minutes">

        <!-- Cardinal Input -->
        <select class="select2" name="longitude_cardinal" required>
            <option value="{{$maritime->longitude_cardinal}}">{{$maritime->longitude_cardinal}}</option>
            <option value="">--Select Cardinal Point--</option>
            <option value="East">East</option>
            <option value="West">West</option>
        </select>
        </div>
        </div>

    <div class="form-section">
       <!-- Section 3: Date and Time Input -->
       <label for="longitude">Date And Time:</label>
        <div class="latitude-inputs">
        <!-- Degrees Input -->
        <input type="date" id="date" value="{{$maritime->date}}" name="date" required placeholder="Date">

        <!-- Minutes Input -->
        <input type="time" id="time" name="time" value="{{$maritime->time}}" required placeholder="Time" >
        </div>
    </div>


    <!-- Section 3: Incident Textarea -->
    <div class="form-section">
        <label for="incident">Incident:</label>
        <textarea id="incident" name="incident" value="{{$maritime->incident}}" rows="4" required placeholder="Describe the incident...">{{$maritime->incident}}</textarea>
    </div>

   <!-- Section 4: Accident and Category Selection -->
<div class="form-section">
    <label for="category">Accident Category:</label>
    <select id="category" name="accident_category" required class="select1" onchange="toggleOtherAccident()">
        <option value="{{$maritime->accident_category}}">{{$maritime->accident_category}}</option>
        <option value="">--Select Accident Category--</option>
        <option value="Vessel Disaster">Vessel Disaster</option>
        <option value="Collisions">Collisions</option>
        <option value="Falling From Height">Falling From Height</option>
        <option value="Fire">Fire</option>
        <option value="Exposure">Exposure</option>
        <option value="Mechanical Accidents">Mechanical Accidents</option>
        <option value="Hazardous Material Accidents">Hazardous Material Accidents</option>
        <option value="Slips And Falls">Slips And Falls</option>
        <option value="Vehicle Accidents">Vehicle Accidents</option>
        <option value="Falls And Drowning">Falls And Drowning</option>
        <option value="Material Handling Accidents">Material Handling Accidents</option>
        <option value="Other">Other</option>
    </select>

    <label for="otherAccident" id="otherAccidentLabel" style="{{ $maritime->accident_category === 'Other' ? 'display:block;' : 'display:none;' }}">Enter Other Accident</label>
    <input type="text" id="otherAccident" name="other_accident" value="{{$maritime->other_accident}}" placeholder="Enter Other Accident" style="{{ $maritime->accident_category === 'Other' ? 'display:block;' : 'display:none;' }}">
</div>

<script>
    // Function to check the selected value on page load
    document.addEventListener("DOMContentLoaded", function() {
        toggleOtherAccident();
    });

    function toggleOtherAccident() {
        var categoryDropdown = document.getElementById("category");
        var otherAccidentLabel = document.getElementById("otherAccidentLabel");
        var otherAccidentInput = document.getElementById("otherAccident");

        if (categoryDropdown.value === "Other") {
            otherAccidentLabel.style.display = "block";
            otherAccidentInput.style.display = "block";
        } else {
            otherAccidentLabel.style.display = "none";
            otherAccidentInput.style.display = "none";
        }
    }
</script>




  <!-- Section 5: Vessel Input-->
<div class="form-section" id="vesselSection">
    <label for="vesselInvolved">Vessel(s) Involved:</label>
    @php
        $vessels = is_array($maritime->vessel_involved) ? $maritime->vessel_involved : explode(',', $maritime->vessel_involved);
    @endphp

    @foreach($vessels as $vessel)
        <input type="text" class="vesselInput" value="{{ $vessel }}" name="vessel_involved[]" required placeholder="Enter MMSI">
    @endforeach
</div>

<button type="button" style="background-color:#ADD8E6" onclick="addVesselInput()">Add Another Vessel</button>

<script>
    function addVesselInput() {
        var vesselSection = document.getElementById("vesselSection");

        // Create a new input element
        var newInput = document.createElement("input");
        newInput.type = "text";
        newInput.className = "vesselInput";
        newInput.name = "vessel_involved[]";
        newInput.required = true;
        newInput.placeholder = "Enter MMSI";

        // Append the new input to the vessel section
        vesselSection.appendChild(newInput);
    }
</script>



    
</form>

</body>
</html>
