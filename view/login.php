<?php
include './header.php';


?>
<html>
    <head>

    </head>
    <body >
        
        <div class="container">
		
            <form id="login_form" class="form-horizontal" role="form" method="POST" action="../controlar/login_helper.php">

            <h2 class="text-center">Please Login</h2>
		<div class="form-group">
		    <label for="email" class="col-sm-3 control-label">User Name</label>
		    <div class="col-sm-6">
                        <input type="text" id="email" name="name" placeholder="User Name" class="form-control" required=>
		    </div>
		</div>
		<div class="form-group">
		    <label for="password" class="col-sm-3 control-label">Password</label>
		    <div class="col-sm-6">
                        <input type="password" id="password" name="pass" placeholder="Password" class="form-control" required>
		    </div>
		</div>

		<div class="form-group">
		    <div class="col-sm-6 col-sm-offset-3">
                        <button type="submit" name="login_btn" id="login_btn" class="btn btn-primary">Login</button>
		    </div>
		</div>
		
	</form>

	</div>
        
    </body>
</html>

