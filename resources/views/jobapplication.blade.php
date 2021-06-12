<!DOCTYPE html>
<html>
<head>
	<met
	a charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/job.css')}}">
</head>
<body>

<div class="container">
	<br>
	<br>
	<p id="job">Job Application Form</p>
	<b>Basic Detail</b>
	<form>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">FirstName</label>
		<div class="col-md-4">
			<input type="text" name="first_name" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">LastName</label>
		<div class="col-md-4">
			<input type="text" name="last_name" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Designation</label>
		<div class="col-md-4">
			<input type="text" name="designation" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Address1</label>
		<div class="col-md-4">
			<input type="text" name="address1" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Email</label>
		<div class="col-md-4">
			<input type="text" name="email" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Address2</label>
		<div class="col-md-4">
			<input type="text" name="address2" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">PhoneNumber</label>
		<div class="col-md-4">
			<input type="text" name="phonenumber" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">City</label>
		<div class="col-md-4">
			<input type="text" name="city" class="form-control">
		</div>
	</div>
	<br>

	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Gender</label>
		<div class="col-md-4">
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">State</label>
		<div class="col-md-4">
			<select name="state" id="cars">
    			<option value="Gujarat">Gujarat</option>
    			<option value="Maharashtra">Maharashtra</option>
  				</select>
		</div>
	</div>
	<br>
	<div class="row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">RelationshipStatus</label>
		<div class="col-md-3">
			    <select name="relationship" id="cars" >
    			<option value="Single">Single</option>
    			<option value="Married">Married</option>
  				</select>
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Date Of Birth</label>
		<div class="col-md-4">
			<input type="text" name="dob" class="form-control">
		</div>
	</div>
	<br>
	<br>
	<b>Education Detail</b>
	<p>SSC Result</p>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Name OF Board</label>
		<div class="col-md-2">
			<input type="text" name="sscboard" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">PassingYear</label>
		<div class="col-md-2">
			<input type="text" name="sscpassingyear" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">Percentage</label>
		<div class="col-md-2">
			<input type="text" name="sscpercentage" class="form-control">
		</div>
	</div>
	<br>
	<p>HSC/Diploma Result</p>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Name OF Board</label>
		<div class="col-md-2">
			<input type="text" name="hscboard" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">PassingYear</label>
		<div class="col-md-2">
			<input type="text" name="hscpassingyear" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">Percentage</label>
		<div class="col-md-2">
			<input type="text" name="hscpercentage" class="form-control">
		</div>
	</div>
	<p>Bachelor Degree</p>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">CourseName</label>
		<div class="col-md-1">
			<input type="text" name="bachelorcourcename" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">University</label>
		<div class="col-md-1">
			<input type="text" name="bacheloruniversity" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">PassingYear</label>
		<div class="col-md-1">
			<input type="text" name="bachelorpassingyear" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Percentage</label>
		<div class="col-md-1">
			<input type="text" name="bachelorpercentage" class="form-control">
		</div>
	</div>
	<p>Master Degree</p>
	
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">CourseName</label>
		<div class="col-md-1">
			<input type="text" name="mastercoursename" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">University</label>
		<div class="col-md-1">
			<input type="text" name="masteruniversity" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">PassingYear</label>
		<div class="col-md-1">
			<input type="text" name="masterpassingyear" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Percentage</label>
		<div class="col-md-1">
			<input type="text" name="masterpercentage" class="form-control">
		</div>
	</div>
	<br>
	<br>
	<b>Work Experience</b>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">CompanyName</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Designation</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">From</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">To</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">CompanyName</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Designation</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">From</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">To</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">CompanyName</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Designation</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">From</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">To</label>
		<div class="col-md-1">
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<br>
	
	<div class="row">
		    		<div class="col-md-4">
		    			<b>Language Known</b><br>

			<input type="checkbox" name="">Hindi
			<input type="checkbox" name="">Read
			<input type="checkbox" name="">Write
			<input type="checkbox" name="">Speack
			<br>
			<input type="checkbox" name="">English
			<input type="checkbox" name="">Read
			<input type="checkbox" name="">Write
			<input type="checkbox" name="">Speack
			<br>
			<input type="checkbox" name="">Gujarati
			<input type="checkbox" name="">Read
			<input type="checkbox" name="">Write
			<input type="checkbox" name="">Speack

		</div>
		<div class="col-md-8">
			<b>Technology you know</b><br>
			<input type="checkbox" name="">PHP
			<input type="radio" name="">Beginner
			<input type="radio" name="">Mediator
			<input type="radio" name="">Export
			<br>
			<input type="checkbox" name="">MySql
			<input type="radio" name="">Beginner
			<input type="radio" name="">Mediator
			<input type="radio" name="">Export
			<br>
			<input type="checkbox" name="">Laravel
			<input type="radio" name="">Beginner
			<input type="radio" name="">Mediator
			<input type="radio" name="">Export
			<br>
			<input type="checkbox" name="">Oracle
			<input type="radio" name="">Beginner
			<input type="radio" name="">Mediator
			<input type="radio" name="">Export

		</div>
	</div>
	<br>
	<b>Reference Detial</b>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Name</label>
		<div class="col-md-2">
			<input type="text" name="" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Contact Number</label>
		<div class="col-md-2">
			<input type="text" name="" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">Relation</label>
		<div class="col-md-2">
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<div class="row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Name</label>
		<div class="col-md-2">
			<input type="text" name="" class="form-control">
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Contact Number</label>
		<div class="col-md-2">
			<input type="text" name="" class="form-control">
		</div>
			<label for="staticEmail" class="col-sm-1 col-form-label">Relation</label>
		<div class="col-md-2">
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<br>
	<b>Preference</b>
	<div class="row">
		<div class="col-md-3">
			Notice Period <input type="text" name=""><br>
			<br>
			Expacted CTC<input type="text" name=""><br>
			<br>
			Current CTC<input type="text" name=""><br>
		</div>
		<label for="staticEmail" class="col-sm-1 col-form-label">Department</label>
		<div class="col-md-3">
			    <select name="cars" id="cars">
    			<option value="volvo">Devlopment</option>
    			<option value="saab">Design</option>
    			<option value="saab">Marketing</option>
  				</select>
	</div>
	</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>