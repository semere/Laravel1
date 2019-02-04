<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/global.css" type="text/css" rel="stylesheet">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap-theme.min.css" integrity="sha384-jzngWsPS6op3fgRCDTESqrEJwRKck+CILhJVO5VvaAZCq8JYf8HsR/HPpBOOPZfR" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<title>Groups</title>

</head>
    <body>
    <h4>Join Blog</h4>
    <div class="container-map">
    <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
    
    <form method="Post" action="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="name" class="form-control" id="exampleInputName1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputemail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputemai1" placeholder="email">
  </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<div class="col-md-4 col-sm-4 col-xs-12"></div>
</div>
</div>

    
              
    </body>
</html>
