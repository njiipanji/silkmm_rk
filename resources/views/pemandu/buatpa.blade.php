@extends('layouts.pemandu')

@section('title', 'Buat PA')

@section('style')
	.input-field {
		margin-top: 0px;
	}
@endsection

@section('title-page', 'Buat PA (Performance Appraisal)')

@section('content')
	<div class="col s8 offset-s2">
		<form>
			<div class="row">
				<div class="input-field col s3 offset-s1">
					<label for="materi">Pilih materi:</label>
				</div>
				<div class="input-field col s7">
					<select id="materi" name="materi" required>
						<option value="" disabled selected>Pilih materi</option>
						<option value="1">Materi 1</option>
						<option value="2">Materi 2</option>
						<option value="3">Materi 3</option>
						<option value="4">Materi 4</option>
					</select>
				</div>
				<div class="input-field col s3 offset-s1">
					<label for="indikator">Isi indikator:</label>
				</div>
				<div class="input-field col s7">
					<input id="indikator1" type="text" required>
					<label for="indikator1">Indikator 1 (wajib diisi!)</label>
				</div>
				<div class="input-field col s7 offset-s4">
					<input id="indikator2" type="text">
					<label for="indikator2">Indikator 2</label>
				</div>
				<div class="input-field col s7 offset-s4">
					<input id="indikator3" type="text">
					<label for="indikator3">Indikator 3</label>
				</div>
				<div class="input-field col s7 offset-s4">
					<input id="indikator4" type="text">
					<label for="indikator4">Indikator 4</label>
				</div>
				<div class="input-field col s7 offset-s4">
					<input id="indikator5" type="text">
					<label for="indikator5">Indikator 5</label>
				</div>
			</div>
			<div class="row center">
				<a href="{{ URL::previous() }}" class="modal-action modal-close waves-effect waves-red btn red">Kembali</a>
				<button type="submit" class="btn waves-effect waves-light">Buat</button>
			</div>
		</form>
	</div>
@endsection

@section('script')
	$('select').material_select();
@endsection