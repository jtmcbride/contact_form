<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="container" id="container">
	<h3>Contact Us</h3>
	<?php 
		if (isset($flash)) {
			echo '<h3 class="label label-danger">'.$flash.'</h3>';
		}
	?>
	<form method="post">
		<div class="form-group">
			<label>
				Email:
				<input class="form-control" type="text" id="email" name="email"/>
				<span class="label label-danger hidden" id="email-warn">Email required.</span>
			</label>
		</div>
		<div class="form-group">
			<label>
				Name:
				<input class="form-control" type="text" id="name" name="name"/>
				<span class="label label-danger hidden" id="name-warn">Name required.</span>
			</label>
		</div>
		<div class="form-group">
		<label>
			Message (optional): <br>
			<textarea class="form-control form-control-lg" rows="5" cols="20" name="message"></textarea>
		</label>
		</div>
		<button onclick="validateInput(event);"class="btn btn-primary"  type="submit">Submit</button>
	</form>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
<script>
	function validateInput(e) {
		if ($('#email').val() === "") {
			e.preventDefault();
			$('#email-warn').removeClass("hidden");
		} 
		if ($('#name').val() === "") {
			e.preventDefault();
			$('#name-warn').removeClass("hidden");
		}
	}
</script>
</html>