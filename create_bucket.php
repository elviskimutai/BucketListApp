<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Virtual Class</title>

    <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/register.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">



  </head>
  <body>
    <!--navbar -->
<nav class="navbar navbar-default navbar-fixed-top navabar-inverse">
  <div class="container-fluid">
   <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
             <a class="navbar-brand" href="index.html"><span class="title">BUCKETLIST</span></a>
          </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="topFixedNavbar1">
              <ul class="nav navbar-nav navbar-left">
                <li ><a href="index.html">Home </a></li>
				<li class="active"><a href="create_bucket.php">create buckelist <span class="sr-only">(current)</a></li>
                <li><a href="view_list.php">View Lists</a></li>
                 <li><a href="">About bucketlist</a></li>

             </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
              </ul>
         </div>
          <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <!--end navbar -->
  <div id="container">

  <div >
    <div class="modal-dialog" id="register_form" >

		
		<div class="modal-body">
			<form class="col-md-12 center-block" method="post" action="">
				<div class="form-group">
					<input type="date" class="form-control input-lg" placeholder="select date" name="fname" required>

				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="title" name="sname" required>

				</div>
        <div class="form-group">
          <textarea class="form-control input-lg" name="comment" form="usrform">Enter description here...</textarea>

        </div>
       
				<div class="form-group">
					<input type="submit" class="btn ntn-block btn-lg btn-primary" value="Create buckelist now" name="register">
					

				</div>
			</form>
			
		</div>
	

</div>
  </div>
  </div>


    <script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>

  </body>
</html>
