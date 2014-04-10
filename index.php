<?php 
include('header.php');
?>
<body> 
<br><br>
    <?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
  
		?>  		
		<form class="form-horizontal" action='contact-submission.php' method="POST">
			<fieldset>
				<div id="legend">
					<legend class="">Register</legend>
				</div>
				<div class="control-group">
				<!-- First name -->
					<label class="control-label"  for="name">First Names</label>
						<div class="controls">
							<input type="text" id="name" name="name" placeholder="Veronica Pinkie" class="input-xlarge">
							<p class="help-block">First names can contain any letters only</p>
						</div>
				</div><!-- close first name-->
				
				<div class="control-group">
				<!-- Last name -->
					<label class="control-label"  for="lastName">Last Name</label>
						<div class="controls">
							<input type="text" id="lastName" name="lastName" placeholder="Mahlaela" class="input-xlarge">
							<p class="help-block">Last name can contain any letters only</p>
						</div>
				</div><!-- close last name-->
				
				<div class="control-group">
				<!-- username -->
					<label class="control-label"  for="username">Username</label>
						<div class="controls">
							<input type="text" id="username" name="username" placeholder="pinkie542" class="input-xlarge">
							<p class="help-block">Username can contain any letters,characters and numbers</p>
						</div>
				</div><!-- close username-->
				
				<div class="control-group">
				<!-- E-mail -->
					<label class="control-label" for="email">E-mail</label>
						<div class="controls">
							<input type="text" id="email" name="email" placeholder="veropinkie@gmail.com" class="input-xlarge">
							<p class="help-block">Please provide your E-mail</p>
						</div>
				</div><!-- close email-->
				
				<div class="control-group">
				<!-- Password-->
					<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
							<p class="help-block">Password should be at least 4 characters</p>
						</div>
				</div><!-- close password-->
				
				<div class="control-group">
				<!-- Password comfirm-->
					<label class="control-label"  for="password_confirm">Password (Confirm)</label>
						<div class="controls">
							<input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
							<p class="help-block">Please confirm password</p>
						</div>
				</div><!-- close password comfirm-->
				
			<div class="control-group">
			<!-- Button -->
				<div class="controls">
					<input type="hidden" name="save" value="contact">
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
			</div>
		</fieldset>
	</form>

</body>
</html>