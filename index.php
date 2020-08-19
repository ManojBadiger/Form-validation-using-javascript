<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form Validation using Javascript</title>
	<link rel="stylesheet" href="form.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	
<div class="wrapper">
	<div class="header">
		<div class="logo">
            <center>
            <p>Pratham Internship Application form</p>
            </center>
		</div>
	
	</div>
	<br>
	<div class="main_container">
		<div class="main_item login_wrap" style="display: block;">
			<div class="title">Fill the application form,We will get back to you</div><br>
			<div class="form">
				<div class="container">
					<form class="bootstrap-form needs-validation"  action="add.php" method="post">
					  <div class="form-row">
						<div class="col-md-12 mb-3">
						  <label for="name">Name</label>
						  <input type="text" class="form-control" id="name" name="name" placeholder="Write your name" autocomplete="off" required>
						  <div class="valid-feedback">
							Looks good!
						  </div>
						  <div class="invalid-feedback">
							Looks bad!
						  </div>
						</div>
						<div class="col-md-12 mb-3">
						  <label for="email">Email</label>
						  <input type="email" class="form-control" id="email" name="email" placeholder="Write your email address" autocomplete="off" required>
						  <div class="valid-feedback">
							Looks good!
						  </div>
						  <div class="invalid-feedback">
							Looks bad!
						  </div>
						</div>
						<div class="col-md-12 mb-3">
							<label >College</label>
							<input type="text" class="form-control" id="college" name="college" placeholder="Write your college name" autocomplete="off" required>
							<div class="valid-feedback">
							  Looks good!
							</div>
							<div class="invalid-feedback">
							  Looks bad!
							</div>
						  </div>
						<div class="col-md-12 mb-3">
							<label >LinkedIn URL</label>
							<input type="url" class="form-control"  name="linked" placeholder="Linkedin url" autocomplete="off" required>
							<div class="valid-feedback">
							  Looks good!
							</div>
							<div class="invalid-feedback">
							  Looks bad!
							</div>
						  </div>
						
					
						<div class="col-md-12 mb-3 ">
						  <label >Graduation Year</label>
						  <select class="form-control"  name="year">
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
							<option>2023</option>
							
						  </select>
						  <div class="valid-feedback">
							Looks good!
						  </div>
						  <div class="invalid-feedback">
							Looks bad!
						  </div>
						</div>
						
						<div class="form-group">
						  <div class="form-check">
							<input class="form-check-input" type="checkbox" id="checkbox" required>
							<label class="form-check-label" for="checkbox">
							  Agree to terms and conditions
							</label>
							<div class="valid-feedback">
							  Hmmm! So you agreed.
							</div>
							<div class="invalid-feedback">
							  You must agree before submitting.
							</div>
						  </div>
						</div>
					  </div>
					 
					  <button class="btn btn-outline-warning" type="reset">Reset form</button>
					  <input type="submit" name="submit" class="btn btn-outline-primary"value="submit">
					</form>
					<br>
					<center>
					<a href="about.php"class="btn btn-outline-white btn btn-primary" >About Us</a>
</center>
			</div>
		</div>
		
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script src="form.js"></script>

</body>
</html>