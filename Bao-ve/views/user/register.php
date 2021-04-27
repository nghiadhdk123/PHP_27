<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!-- <link rel="stylesheet" href="public/particles.js-master/demo/css/style.css"> -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

	<style>
		label{
			color: white;
    		display: block;
    		width: 100%;
		}
	</style>



<!------ Include the above in your HEAD tag ---------->
</head>
<body >
	<div id="particles-js" style="background-color: black;display: flex;flex-direction: column;justify-content: center;align-content: center;align-items: center;position: relative;">
	<h2 style="width: 100%;text-align: center;font-weight: bold;margin-bottom: 5%;position: absolute;top: 15%;color: white">REGISTER ACCOUNT</h2>
	<div class="col-md-4 col-md-offset-4" id="login" style="position: absolute;">
						<section id="inner-wrapper" class="login">
							<article>
								<form action="index.php?admin=admin&mod=user&act=store" method="POST" id="form_Demo">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" class="form-control" placeholder="Name" name="name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input type="email" class="form-control" placeholder="Email Address" name="email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" class="form-control" placeholder="Password" name="password">
										</div>
									</div>
									  <button type="submit" class="btn btn-success btn-block">Submit</button>
								</form>
							</article>
						</section>
					</div>
		</div>

		<script src="public/particles.js-master/particles.js"></script>
		<script src="public/particles.js-master/demo/js/app.js"></script>
		<script>
			$(document).ready(function(){
			$('#form_Demo').validate({
            rules: {
				name: "required",
				email: "required",
				password: "required",
			},
			messages: {
				name: "Please enter your name",
				email: "Please enter your phone",
				password: "Please enter your phone",
				}
    		});	
		});
		</script>
</body>
</html>