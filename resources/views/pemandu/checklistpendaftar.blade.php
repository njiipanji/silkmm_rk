@extends('layouts.pemandu')

@section('title', 'Checklist Pendaftar')

@section('title-page', 'Checklist Pendaftar')

@section('content')
	{{-- list pendaftar --}}
	<div class="col s12">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th>Berkas</th>
					<th>Status</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>511x100xxx</td>
					<td>Aditya N.</td>
					<td>0</td>
					<td><i class="material-icons" title="belum upload">clear</i></td>
					<td><a href="#!" title="verifikasi?"><i class="material-icons teal-text">thumb_up</i></a></td>
				</tr>
				<tr>
					<td>2</td>
					<td>511x100xxx</td>
					<td>Adinda P.</td>
					<td><a href="#!"><i class="material-icons">get_app</i></a></td>
					<td><i class="material-icons" title="sudah upload">done</i></td>
					<td><a href="#!" title="batalkan verifikasi?"><i class="material-icons red-text">undo</i></a></td>
				</tr>
				<tr>
					<td>3</td>
					<td>511x100xxx</td>
					<td>Ananda Q.</td>
					<td>0</td>
					<td><i class="material-icons" title="belum upload">clear</i></td>
					<td><a href="#!" title="verifikasi?"><i class="material-icons teal-text">thumb_up</i></a></td>
				</tr>
				<tr>
					<td>4</td>
					<td>511x100xxx</td>
					<td>Bagus N.</td>
					<td><a href="#!"><i class="material-icons">get_app</i></a></td>
					<td><i class="material-icons" title="sudah upload">done</i></td>
					<td><a href="#!" title="batalkan verifikasi?"><i class="material-icons red-text">undo</i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
	{{-- <div class="col s12 center" style="margin-top: 50px;">
		<h6>Unduh berkas pendaftar, <a href="{{ url('pemandu/peserta/berkas') }}"><strong>disini</strong></a></h6>
	</div> --}}
@endsection