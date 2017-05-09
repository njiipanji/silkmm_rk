@extends('layouts.pemandu')

@section('title', 'Daftar Kuesioner')

@section('title-page', 'Daftar Kuesioner')

@section('content')
	<div class="col s8 offset-s2">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>Materi</th>
					<th>Status</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Materi 1</td>
					<td><i class="material-icons teal-text">done</i></td>
					<td title="selesai">1</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Materi 2</td>
					<td title="proses"><i class="material-icons teal-text">hourglass_empty</i></td>
					<td>Proses</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Materi 3</td>
					<td>-</td>
					<td title="rilis kuesioner?"><a href="{{ url('pemandu/buat/riliskuesioner') }}"><i class="material-icons teal-text">send</i></a></td>
				</tr>
				<tr>
					<td>4</td>
					<td>Materi 4</td>
					<td>-</td>
					<td title="rilis kuesioner?"><a href="{{ url('pemandu/buat/riliskuesioner') }}"><i class="material-icons teal-text">send</i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection