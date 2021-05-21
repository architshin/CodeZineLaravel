@extends("layouts.app")

@section("content")
<section>
	<p>無事認証を通過しました!</p>
	<ul>
		<li>{{Auth::user()->name}}</li>
		<li>{{Auth::user()->email}}</li>
	</ul>
</section>
@endsection
