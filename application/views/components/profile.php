<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>user profile</title>
</head>
<body>
	<!-- <h5>sandip</h5> -->
	<li class="nav-item">
		<a class="btn big-login" data-toggle="modal" data-target="#modalLoginForm" href="javascript:void(0);">My account</a>
	</li>

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-header text-center">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div><br>
			<?php if($this->getSession('userId')):?>
				<ul class="my-2 my-lg-0"><a href="<?php echo BASEURL; ?>/accountController/logout" class="btn btn-success">Logout</a></ul><br>
			<?php endif; ?>

		</div>
	</div>
</div>
</body>
</html>