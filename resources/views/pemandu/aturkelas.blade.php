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
					<td>
						<a class="btn green" style="height: 25px; font-weight: bold; padding: 0 1rem; margin-bottom: 5px;" href="{{url('/pemandu/peserta/bagikelas/aturkelas/1')}}" title="Ubah"><i style="line-height: 5px;" class="material-icons white-text">mode_edit</i></a><input type="submit" class="btn red" onclick="return confirm('Anda yakin akan menghapus data?');" value="x" title="Hapus kelas" style="height: 25px; line-height: 5px; padding: 0 1.3rem; font-weight: bold; margin-bottom: 5px; margin-left: 10px;">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>IF-102</td>
					<td>1/29</td>
					<td>
						<a class="btn green" style="height: 25px; font-weight: bold; padding: 0 1rem; margin-bottom: 5px;" href="{{url('/pemandu/peserta/bagikelas/aturkelas/2')}}" title="Ubah"><i style="line-height: 5px;" class="material-icons white-text">mode_edit</i></a><input type="submit" class="btn red" onclick="return confirm('Anda yakin akan menghapus data?');" value="x" title="Hapus kelas" style="height: 25px; line-height: 5px; padding: 0 1.3rem; font-weight: bold; margin-bottom: 5px; margin-left: 10px;">
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>IF-103</td>
					<td>0/30</td>
					<td>
						<a class="btn green" style="height: 25px; font-weight: bold; padding: 0 1rem; margin-bottom: 5px;" href="{{url('/pemandu/peserta/bagikelas/aturkelas/3')}}" title="Ubah"><i style="line-height: 5px;" class="material-icons white-text">mode_edit</i></a><input type="submit" class="btn red" onclick="return confirm('Anda yakin akan menghapus data?');" value="x" title="Hapus kelas" style="height: 25px; line-height: 5px; padding: 0 1.3rem; font-weight: bold; margin-bottom: 5px; margin-left: 10px;">
					</td>
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