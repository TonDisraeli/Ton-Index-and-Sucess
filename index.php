<?php require_once "includes/header.php" ?>
<h1 class="text-center"> REGISTRATION OF IT CONFERENCE </h1>
<body>

<form method="GET" action = "success.php">
  <form>
    <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
</div>
<div class="form-group">
<label for="lastname">Last Name</label>
    <input  type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <form action="/success.php">
    <label for="birthdate" > Date:</label>
    <input  type="text" class="form-control" id="datepicker" name="birthdate"></p>

<form action="/success.php.php">
  <label for="Specialty">Specialty:</label>
  <div class="form-group form-check">
    <input type="radio" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> DATABASE ADMIN</label>
    </div>
    <div class="form-group form-check">
    <input type="radio" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> SOFTWARE DEVELOPER</label>
    </div>
    <div class="form-group form-check">
    <input type="radio" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> WEB ADMINISTRATOR</label>
    </div>

    <div class="form-group form-check">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

  <div class="form-group">
    <label for="Contact Number">Contact Number</label>
    <input type="Contact Number" class="form-control" id="Contact Number">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" style="height: 50px; width:2000px">Submit</button></label>
</form>

<?php require_once "includes/footer.php" ?>