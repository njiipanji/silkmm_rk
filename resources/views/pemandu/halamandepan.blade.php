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
				<div class="collapsible-header">04-03-2017 15:00 | Pengumuman 1</div>
				<div class="collapsible-body"><span>Ini isi pengumuman 1.</span></div>
			</li>
			<li>
				<div class="collapsible-header">03-03-2017 18:00 | Pengumuman 2</div>
				<div class="collapsible-body"><span>Ini isi pengumuman 2.</span></div>
			</li>
			<li>
				<div class="collapsible-header">03-03-2017 18:00 | Pengumuman 3</div>
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