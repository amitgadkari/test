@extends('layouts/app')


@section('title')
	<title>Home</title>
@endsection


@section('content')

<a href="{{url('/songs/create')}}" class="btn btn-success">Add Songs</a>
		
<table align="center" border=5 width="50%">
				<tr>
					<th>
						Song Name 
					</th>
						
					<th>
						Song Lyrics
					</th>
				</tr>
				
				@foreach($songs as $song)
					
					<tr>
						<th>
							{{ $song->name }}
						</th>
						
						<th>
							{{ $song->Lyrics }}						
						</th>
					</tr>
				
				@endforeach
</table>

<form method="Post" action="{{}}">
					
	<font size="5">Search Song:</font>
	<input type="text" name="search"><br><br>
	<input type="submit" value="Search" name="search">
				
</form>

@endsection
	


