<?php 
include('header.php');
?>
<body> 
<br><br>
<div class="container">
	<div class="row">
    <div class="span4 offset4">
        <legend>Sign in to Shoe mania</legend>
        <form method="POST" action="login_contact_submission.php" accept-charset="UTF-8">
        	<fieldset>
            <?php  
        // check for a successful form post  
	        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
	  
	        // check for a form error  
	        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
			?> 
            <input class="span5" placeholder="Username" type="text" id = "name" name="username">
            <input class="span5" placeholder="Password" type="password" id = "password" name="password"> 
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"> Remember Me
            </label>
            <button class="btn-info btn" type="submit">Login</button>
            </<fieldset>      
        </form>    
    </div>
</div>
	
</div>    		

</body>
</html>