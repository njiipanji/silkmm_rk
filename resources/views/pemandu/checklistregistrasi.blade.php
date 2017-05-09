@extends('layouts.pemandu')

@section('title', 'Checklist Registrasi')

@section('title-page', 'Checklist Registrasi Peserta')

@section('content')
	{{-- list pendaftar --}}
	<div class="col s12">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th width="100px">Kemeja</th>
					<th width="100px">Almamater</th>
					<th width="100px">Celana/Rok</th>
					<th width="100px">Dasi</th>
					<th width="100px">KTM</th>
					<th>Waktu Registrasi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>511x100xxx</td>
					<td>Aditya N.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>1</td>
					<td>18:05:10</td>
				</tr>
				<tr>
					<td>2</td>
					<td>511x100xxx</td>
					<td>Adinda P.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>18:06:14</td>
				</tr>
				<tr>
					<td>3</td>
					<td>511x100xxx</td>
					<td>Ananda Q.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>18:10:04</td>
				</tr>
				<tr>
					<td>4</td>
					<td>511x100xxx</td>
					<td>Bagus N.</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>18:12:17</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection