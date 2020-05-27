<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Of Flights</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Flight Number</th>
      <th scope="col">DepartureDate Time</th>
      <th scope="col">ArrivalDate Time</th>
      <th scope="col">Elapsed Time</th>
      <th scope="col">OperatingAirline</th>
      <th scope="col">OperatingAirlineName</th>
      <th scope="col">DepartureAirportName</th>
      <th scope="col">ArrivalAirportName</th>
      <th scope="col">FlightLayoverTime</th>
    </tr>
  </thead>
  <tbody>
    @foreach($results as $result)
    <tr>
      <td>{{$result['FlightNumber']}}</td>
      <td>{{date('Y-m-d h:i A', strtotime($result['DepartureDateTime']))}}</td>
      <td>{{date('Y-m-d h:i A', strtotime($result['ArrivalDateTime']))}}</td>
      <td>
      {{floor($result['ElapsedTime']/60) . " " . "hrs" . " " . $result['ElapsedTime']%60 . " " . "mins"}}
      </td>
      <td>{{$result['OperatingAirline']}}</td>
      <td>{{$result['OperatingAirlineName']}}</td>
      <td>{{$result['DepartureAirportName']}}</td>
      <td>{{$result['ArrivalAirportName']}}</td>
      <td>{{floor($result['FlightLayoverTime']/60) . " " . "hrs" . " " . $result['FlightLayoverTime']%60 . " " . "mins"}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>

</html>


