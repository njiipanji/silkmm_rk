@extends('layouts.pemandu')

@section('title', 'Daftar PA')

@section('title-page', 'Daftar PA')

@section('content')
	<div class="col s8 offset-s2">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>Materi</th>
					<th>Indikator 1</th>
					<th>Indikator 2</th>
					<th>Indikator 3</th>
					<th>Indikator 4</th>
					<th>Indikator 5</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Materi 1</td>
					<td>txt</td>
					<td>txt</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td><a href="{{ url('pemandu/buat/pa') }}"><i class="material-icons teal-text">mode_edit</i></a></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Materi 2</td>
					<td>txt</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td><a href="{{ url('pemandu/buat/pa') }}"><i class="material-icons teal-text">mode_edit</i></a></td>
				</tr>
				<tr>
					<td>3</td>
					<td>Materi 3</td>
					<td>txt</td>
					<td>txt</td>
					<td>txt</td>
					<td>txt</td>
					<td>-</td>
					<td><a href="{{ url('pemandu/buat/pa') }}"><i class="material-icons teal-text">mode_edit</i></a></td>
				</tr>
				<tr>
					<td>4</td>
					<td>Materi 4</td>
					<td>txt</td>
					<td>txt</td>
					<td>txt</td>
					<td>-</td>
					<td>-</td>
					<td><a href="{{ url('pemandu/buat/pa') }}"><i class="material-icons teal-text">mode_edit</i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection