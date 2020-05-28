<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="{{ route('searchflight') }}" class="form-inline" style="margin-top:20rem; margin-left:7rem;">
    @csrf
  <div class="form-group mx-sm-3 mb-2" style="display:block;">
    <label for="fromcity">From</label>
    <input type="text" name="from" class="form-control" id="fromcity" placeholder="City or Airport">
  </div>
  <div class="form-group mx-sm-3 mb-2"style="display:block;">
    <label for="fromcity">To</label>
    <input type="text" name="to" class="form-control" id="fromcity" placeholder="City or Airport" value="">
  </div>
  <div class="form-group mx-sm-3 mb-2"style="display:block;">
    <label for="departing">Departing</label>
    <input type="date" name="departing" class="form-control" id="departing">
  </div>
  <div class="form-group mx-sm-3 mb-2"style="display:block;">
    <label for="returning">Returning</label>
    <input type="date" name="returning" class="form-control" id="returning">
  </div>
  <div class="form-group mx-sm-3 mb-2"style="display:block;">
    <label for="travellers">Travellers</label>
    <input type="text" name="travellers" class="form-control" id="travellers">
  </div>
  <div class="form-group mx-sm-3 mb-2"style="display:block;">
    <label for="class">Class</label>
    <input type="text" name="class" class="form-control" id="class">
  </div>
  
  <button type="submit" class="btn btn-primary mt-3">Search</button>
</form>
</body>

</html>


