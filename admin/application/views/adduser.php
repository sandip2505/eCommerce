<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="http://localhost/Admin/ProductController/createAccount" method="post">
		<label>name</label>
		<input type="text" name="name">
		<div class="error">
			<?php if(!empty($data['nameError'])): echo $data['nameError']; endif; ?>
		</div>
		<input type="button" value="submit" name="">
	</form>
</body>
</html