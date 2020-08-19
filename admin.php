<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form Validation using Javascript</title>
    <link rel="stylesheet" href="form.css">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	
<div class="wrapper">
	<div class="header">
		<div class="logo">
            <center>
            <p>Pratham Internship Admin Section</p>
            </center>
		</div>
	
	</div>
	<br>
	<div class="main_container">
		<div class="main_item login_wrap" style="display: block;">
			
			<div class="form">
				<div class="container">
					<form class="bootstrap-form needs-validation"  action="applicants.php" method="post">
					  <div class="form-row">
						<div class="col-md-12 mb-3">
                            <br>
                            <br>
                            <br>
						  <label for="name">Admin Name</label>
						  <input type="text" class="form-control" id="name" name="aname" placeholder="Write admin name" autocomplete="off" required>
						 
						</div>
						<div class="col-md-12 mb-3">
						  <label>Password</label>
						  <input type="password" class="form-control" name="password" placeholder="password" autocomplete="off" required>
						  
						</div>
						
					  
					  <input type="submit" name="login" class="btn btn-outline-primary"value="submit">
					</form>
					<br>
					<center>
				
</center>
			</div>
		</div>
		
	
</div>
</div>
<div id="po" >
   
<a href="index.php"class="btn btn-outline-white btn btn-primary" >Go to application form</a>

</div>	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script src="form.js"></script>

</body>
</html>

