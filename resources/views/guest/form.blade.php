<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="{{ route("posttest") }} " method="POST">
	@csrf
	<input type="text" name="name">asdasd
</input>
	<button>Submit</button>
</form>


</body>
</html>