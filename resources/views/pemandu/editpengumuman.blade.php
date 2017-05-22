@extends('layouts.pemandu')

@section('title', 'Halaman Ubah Pengumuman')

@section('title-page', 'Ubah Pengumuman')

@section('content')
	{{-- list pengumuman --}}
	<div class="col s12">
		<form class="col s12">
			<div class="row">
				<div class="input-field col s8 offset-s2">
					<i class="material-icons prefix">bookmark</i>
					<input id="judul_pengumuman" type="text" name="judul_pengumuman">
					<label for="judul_pengumuman">Judul Pengumuman</label>
				</div>
				<div class="input-field col s8 offset-s2">
					<i class="material-icons prefix">book</i>
					<textarea id="textarea_isi" class="materialize-textarea" name="textarea_isi"></textarea>
					<label for="textarea_isi">Isi Pengumuman</label>
				</div>
				<div class="col s8 offset-s2 center">
					<a href="{{ URL::previous() }}" class="waves-effect waves-red btn red">Batal</a>
					<button class="modal-action waves-effect waves-teal btn" type="submit" name="submit">Ubah</button>
				</div>
			</div>
		</form>
	</div>
@endsection

@section('script')
	$('#textarea_isi').trigger('autoresize');
@endsection