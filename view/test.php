<?php
include './header.php';
?>

<head>
	<meta charset="UTF-8">
	<title >Meal Management System</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/style.css" />

	<meta name="viewport" content="width=device-width initial-scale=1">

	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

	<style >
		
		.img-responsive{
			
		}
	</style>

</head>


<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle navbar-" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

	</div>
	<div class="collapse navbar-collapse">

		<div class="col-lg-3 container" >



			<ul class="nav navbar navbar-inverse nav" style="height: 650px;">
				<li style="margin-left: 10px;"><a href="deshboad.php"><i class="glyphicon glyphicon-dashboard"> DeshBord</i></a></li>


				<li style="margin-left: 10px;"><a href="#new_meal" data-toggle="collapse"><i class="glyphicon glyphicon-info-sign"> Meal & Bazar</a></i>
					<ul class="nav collapse" id="new_meal">
						<li style="margin-left: 10px;"><a href="insert_data.php"><i class="glyphicon glyphicon-plus"> Meal & Bazar</i> </a></li>
						<li style="margin-left: 10px;"><a href="edit_meal_bazar.php"><i class="glyphicon glyphicon-edit"> Edit Meal & Bazar</i> </a></li>
					</ul>
				</li>


				<li style="margin-left: 10px;"><a href="#new_item" data-toggle="collapse"><i class="glyphicon glyphicon-info-sign"> Member</a></i>

					<ul class="nav collapse" id="new_item">

						<li style="margin-left: 20px;"><a href="addMember.php"><i class="glyphicon glyphicon-plus"></i> Add Member</a></li>
						<li style="margin-left: 20px;"><a href="updatemember.php"><i class="glyphicon glyphicon-refresh"></i> Update Member</a></li>
						<li style="margin-left: 20px;"><a href="deleatMember.php"><i class="glyphicon glyphicon-trash"></i> Deleat Member</a></li>

					</ul>
				</li>


				<li style="margin-left: 10px;"><a href="month_end.php" ><i class="glyphicon glyphicon-off"> Month End</a></i></li>



			</ul>

		</div>
	</div><!--/.nav-collapse -->
</div>


<div class="container">

	<div class="col-md-6">

		<h1 class="text-center"><kbd>Details</kbd></h1>
		<div class="container">
			<table class="table table-responsive table-bordered" id="show_detail"style="width: 400px;">
<img class="img-circle img-responsive" src="../user_images/2013-10-18 16.47.59.jpg" style="width: 100px; height: 100px; margin-left: 150px;">
				

				
				<tr class="form-group">
					<td>
						<label>Full Name:</label>
					</td>
					<td>limu</td>
				</tr>

				<tr class="form-group">
					<td>
						<label>User Name:</label>
					</td>
					<td>limu121</td>

				</tr>




			</table>

		</div>
	</div>

</div><!-- /.container -->