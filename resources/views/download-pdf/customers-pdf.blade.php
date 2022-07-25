<style>
    table,
    th,
    td{
        border: 1px solid black;
        border-collapse: collapse;
        width: 100%;
    }
   
    .table{
        width: 100%;
    }
    tr td{
        padding: 6px;
    }
    th {
        text-align: left;
        padding: 10px;
    }




</style>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

    <div class="col-md-6"><label><strong><center>Registration Form</center></strong></label></div>
    &nbsp;
    &nbsp;
    <table class="table table-bordered">

        <tr>
            <th>First Name:</th>
            <td>{{$first_name}}</td>
        </tr>

        <tr>
            <th>Last Name:</th>
            <td>{{$last_name}}</td>
        </tr>
     
        <tr>
            <th>Mother's Name:</th>
            <td>{{$mothers_name}}</td>
        </tr>

        <tr>
            <th>Father's Name:</th>
            <td>{{$fathers_name}}</td>
        </tr>

        <tr>
            <th>Address:</th>
            <td>{{$address}}</td>
        </tr>

        <tr>
            <th>Gender:</th>
            <td>{{$inlineRadioOptions}}</td>
        </tr>

        <tr>
            <th>DOB:</th>
            <td>{{$dob}}</td>
        </tr>

        <tr>
            <th>Pincode:</th>
            <td>{{$pincode  }}</td>
        </tr>

        <tr>
            <th>State:</th>
            <td>{{$state}}</td>
        </tr>

        <tr>
            <th>City:</th>
            <td>{{$city}}</td>
        </tr>

        <tr>
            <th>Contact Number:</th>
            <td>{{$contact}}</td>
        </tr>

        <tr>
            <th>Email:</th>
            <td>{{$email}}</td>
        </tr>

        <tr>
            <th>Lok sabha:</th>
            <td>{{$loksabha}}</td>
        </tr>

        <tr>
            <th>Vidhan sabha:</th>
            <td>{{$vidhansabha}}</td>
        </tr>

        <tr>
            <th>Referral code:</th>
            <td>{{$referralcode}}</td>
        </tr>

        <tr>
            <th>Photo:</th>
            <!-- <td>{{$filename}}</td> -->
            <!-- <td>{{asset($filename)}}</td> -->
            <td><img height="100px" width="150px" src="filename{{$filename}}" alt=""></td>
        </tr>


</table>
    </div>
    <div class="col-md-3"></div>
    <div class="clearfix"></div>
</div>