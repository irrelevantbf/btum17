<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="{{ route("posttest") }} " method="POST">
	@csrf
	<input type="text" name="name" placeholder="NAME">
	<input type="text" name="lastname" placeholder="LASTNAME">
	<input type="text" name="address" placeholder="ADDRESS">
	<input type="text" name="biograpia" placeholder="BIO">
	<input type="date" name="birthdate" placeholder="Birth Date">


	<button>Submit</button>
</form>


</body>
</html>