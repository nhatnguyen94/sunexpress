<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('createpost')}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="name">
		<input type="submit" value="Submit">
	</form>

</body>
</html>
