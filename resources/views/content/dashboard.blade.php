@extends("content.layouts")

@section("page_content")

<div class="col-sm-12 col-md-12">
	<div class="panel panel-violet">
		<div class="panel-heading">
			Selamat Datang <b>{{ Auth::user()->name }}</b>
		</div>
		<div class="panel-body">
			di Aplikasi Restoran Kami. Silahkan Pilih menu untuk memulai program
		</div>
	</div>
</div>

@endsection