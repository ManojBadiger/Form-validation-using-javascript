<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
include("config.php");
if(isset($_POST['login']))
{
    $name=$_POST['aname'];
    $pass=$_POST['password'];
    $select="SELECT * FROM inter";
    $run_sel=mysqli_query($con,$select);
    if($name=="manoj" && $pass=="mjmjmj")
    {
        
        ?>
        <center>
        <h1>
            List of Applicants for Inernship
        </h1>
    </center>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">College</th>
      <th scope="col">Linkedin URL</th>
      <th scope="col">Graduation Year</th>
    </tr>
  </thead>
  <?php
 

  while( $separated=mysqli_fetch_array($run_sel))
  {
      ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $separated['name']?></th>
      <td><?php echo $separated['email']?></td>
      <td><?php echo  $separated['college']?></td>
      <td><?php echo $separated['linked']?></td>
      <td><?php echo $separated['year']?></td>
    </tr>
    <?php
  }
  ?>
    
  </tbody>

</table>

<?php
    }
    else{
        echo"<script>alert('wrong password or wrong admin name')</script>";
        echo "check the admin name or password once again";
        ?>
        <a  href="admin.php">Go to admin page</a>
        <?php
    }

}
else{
    echo "<script>window.open('admin.php','_self')</script>";
}
?>