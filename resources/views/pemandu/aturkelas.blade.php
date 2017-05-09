@extends('layouts.pemandu')

@section('title', 'Atur Kelas')

@section('title-page', 'Atur Kelas')

@section('content')
	<div class="row center">
		<a class="btn waves-effect waves-light" href="#tambahkelas">Tambah Kelas</a>
	</div>

	<div class="col s8 offset-s2">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>Kelas</th>
					<th>Nama Kelas</th>
					<th>Kuota</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>IF-101</td>
					<td>2/30</td>
					<td><a href="#!" title="Ubah"><i class="material-icons teal-text">mode_edit</i></a><span>   </span><a href="#!" title="Hapus"><i class="material-icons red-text">clear</i></a></td>
				</tr>
				<tr>
					<td>2</td>
					<td>IF-102</td>
					<td>1/29</td>
					<td><a href="#!" title="Ubah"><i class="material-icons teal-text">mode_edit</i></a><span>   </span><a href="#!" title="Hapus"><i class="material-icons red-text">clear</i></a></td>
				</tr>
				<tr>
					<td>3</td>
					<td>IF-103</td>
					<td>0/30</td>
					<td><a href="#!" title="Ubah"><i class="material-icons teal-text">mode_edit</i></a><span>   </span><a href="#!" title="Hapus"><i class="material-icons red-text">clear</i></a></td>
				</tr>
			</tbody>
		</table>
	</div>

	{{-- modal --}}
	<div id="tambahkelas" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div class="row center">
				<h4>Tambah Kelas<h4>				
			</div>
			<form class="col s12" action="#!">
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">info</i>
						<input id="nama_kelas" type="text">
						<label for="nama_kelas">Nama Kelas</label>
					</div>
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">event_seat</i>
						<input id="kuota_kelas" type="number">
						<label for="kuota_kelas">Kuota Kelas</label>
					</div>
				</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
			<a href="#!" class="modal-action waves-effect waves-teal btn-flat ">Tambah</a>
			</form>
		</div>
	</div>
@endsection

@section('script')
	$('.modal').modal();
@endsection