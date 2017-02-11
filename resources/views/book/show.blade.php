@include('layout.header')


@yield("content")

<div class="container">
	<div class="row">
		<div class="col-md-6 two-windows">
			<div class="igm-description">
				<img src="{{ $book->nuotrauka }}">
			</div>
			<div class="auth-name">
				<ul>
					<li>{{ $book->autorius }}</li>
				</ul>
			</div>
		</div>
		<div class="col-md-6 two-windows" >
			<p>{{ $book->pavadinimas }}<p>
			<h6>{{ $book->apibudinimas }}</h6>
		</div>
	</div>
</div>

@include('layout.footer')
