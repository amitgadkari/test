



	<title>Music s Life</title>

	<form action={{url('songs/save')}} method="Post">
		{{csrf_field()}}
			<hr><br>
			<font size="5">New Song:</font><br><br>
			<hr>
			<br>
			Song name:
			<input type="text" name="name"><br><br>
			Singer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="singer"><br><br>
			Lyrics:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="lyrics"><br><br>


			<input type="submit" value="Save" name="save"><br><br>

		</form>
			
@extends('layouts/app')			


			


		

	</body>
</html>