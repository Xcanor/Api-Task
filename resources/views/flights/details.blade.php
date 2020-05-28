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
    @foreach($result['flights'] as $flights)
    @foreach($flights as $key => $flight)
    <tr>
      <td>{{$flight['FlightNumber']}}</td>
      <td>{{date('Y-m-d h:i A', strtotime($flight['DepartureDateTime']))}}</td>
      <td>{{date('Y-m-d h:i A', strtotime($flight['ArrivalDateTime']))}}</td>
      <td>
      {{floor($flight['ElapsedTime']/60) . " " . "hrs" . " " . $flight['ElapsedTime']%60 . " " . "mins"}}
      </td>
      <td>{{$flight['OperatingAirline']}}</td>
      <td>{{$flight['OperatingAirlineName']}}</td>
      <td>{{$flight['DepartureAirportName']}}</td>
      <td>{{$flight['ArrivalAirportName']}}</td>

      @if($flight['FlightLayoverTime'] == 0)
      <td>-</td>
      @else
      <td>{{floor($flight['FlightLayoverTime']/60) . " " . "hrs" . " " . $flight['FlightLayoverTime']%60 . " " . "mins"}}</td>
      @endif
    </tr>
    @endforeach
    @endforeach
    @endforeach
  </tbody>
</table>
</body>

</html>


