@extends('layouts.pemandu')

@section('title', 'Halaman Depan')

@section('title-page', 'Pengumuman')

@section('content')
	<div class="row center">
		<a class="btn waves-effect waves-light" href="#modaltambah">Tambah</a>
	</div>

	{{-- list pengumuman --}}
	<div class="col s12">
		<ul class="collapsible" data-collapsible="accordion">
			<li>
				<div class="collapsible-header">
					<span class="badge">
						<a class="btn green" style="height: 20px; line-height: 10px; padding: 0 1rem;" href="{{url('/pemandu/pengumuman/1')}}"><i class="material-icons" title="Ubah pengumuman" style=" width: 1rem; font-size: 1rem; line-height: 1.5rem; margin-right: 0px;">mode_edit</i></a>
						<input type="submit" class="btn red" onclick="return confirm('Anda yakin akan menghapus data?');" value="x" title="Hapus pengumuman" style="height: 20px; line-height: 10px; padding: 0 1.2rem; font-weight: bold;">
					</span> 04-03-2017 15:00 | Pengumuman 1</div>
				<div class="collapsible-body"><span>Ini isi pengumuman 1.</span></div>
			</li>
			<li>
				<div class="collapsible-header">
					<span class="badge">
						<a class="btn green" style="height: 20px; line-height: 10px; padding: 0 1rem;" href="{{url('/pemandu/pengumuman/2')}}"><i class="material-icons" title="Ubah pengumuman" style=" width: 1rem; font-size: 1rem; line-height: 1.5rem; margin-right: 0px;">mode_edit</i></a>
						<input type="submit" class="btn red" onclick="return confirm('Anda yakin akan menghapus data?');" value="x" title="Hapus pengumuman" style="height: 20px; line-height: 10px; padding: 0 1.2rem; font-weight: bold;">
					</span> 03-03-2017 18:00 | Pengumuman 2</div>
				<div class="collapsible-body"><span>Ini isi pengumuman 2.</span></div>
			</li>
			<li>
				<div class="collapsible-header">
					<span class="badge">
						<a class="btn green" style="height: 20px; line-height: 10px; padding: 0 1rem;" href="{{url('/pemandu/pengumuman/3')}}"><i class="material-icons" title="Ubah pengumuman" style=" width: 1rem; font-size: 1rem; line-height: 1.5rem; margin-right: 0px;">mode_edit</i></a>
						<input type="submit" class="btn red" onclick="return confirm('Anda yakin akan menghapus data?');" value="x" title="Hapus pengumuman" style="height: 20px; line-height: 10px; padding: 0 1.2rem; font-weight: bold;">
					</span> 03-03-2017 18:00 | Pengumuman 3</div>
				<div class="collapsible-body"><span>Ini isi pengumuman 3.</span></div>
			</li>
		</ul>
	</div>

	{{-- modal --}}
	<div id="modaltambah" class="modal modal-fixed-footer">
		<div class="modal-content">
			<div class="row center">
				<h4>Tambah Pengumuman<h4>				
			</div>
			<form class="col s12" action="#!">
				<div class="row">
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">bookmark</i>
						<input id="judul_pengumuman" type="text">
						<label for="judul_pengumuman">Judul Pengumuman</label>
					</div>
					<div class="input-field col s8 offset-s2">
						<i class="material-icons prefix">book</i>
						<textarea id="textarea_isi" class="materialize-textarea"></textarea>
						<label for="textarea_isi">Isi Pengumuman</label>
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
	$('.collapsible').collapsible();
	$('#textarea_isi').trigger('autoresize');
@endsection