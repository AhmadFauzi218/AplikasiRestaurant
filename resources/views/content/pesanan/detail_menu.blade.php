@extends("content.layouts")

@section("page_content")

<div class="col-md-4">
	<div class="panel panel-yellow">
		<div class="panel-heading">
			Detail Menu <b>{{ $detail->nama_menu }}</b>
		</div>
		<div class="panel-body pal">
			<form>
				<div class="form-body">
					<div class="form-group">
						<label> Kode Menu</label>
						<input type="text" class="form-control" value="{{ $detail->kode_menu }}" readonly style="background-color: white;">
					</div>
					<div class="form-group">
						<label> Nama Menu </label>
						<input type="text" class="form-control" value="{{ $detail->nama_menu }}" readonly style="background-color: white;">
					</div>
					<div class="form-group">
						<label> Harga Menu </label>
						<input type="text" class="form-control" value="{{ $detail->harga_menu }}" readonly style="background-color: white;">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-yellow">
		<div class="panel-heading">
			Jumlah Pesan Menu
		</div>
		<div class="panel-body pal">
			<form method="POST" action="{{ url('/simpan_data_pesanan_menu') }}">
				{{ csrf_field() }}
				<input type="hidden" name="id_menu" value="{{ $detail->id }}">
				<div class="form-body">
					<div class="form-group">
						<label> Kode Menu </label>
						<input type="text" class="form-control" value="{{ $detail->kode_menu }}" readonly style="background-color: white;">
					</div>
					<div class="form-group">
						<label> Nama Menu </label>
						<input type="text" class="form-control" value="{{ $detail->nama_menu }}" readonly style="background-color: white;">
					</div>
					<div class="form-group">
						<label> Jumlah Pesanan </label>
						<input type="number" class="form-control" name="qty" placeholder="0">
					</div>
				</div>
				<div class="form-actions text-right pal">
					<button type="submit" class="btn btn-warning btn-block">
						<i class="fa fa-fw fa-plus"></i> Tambah 
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection