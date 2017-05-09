@extends('layouts.pemandu')

@section('title', 'Pembagian Kelas')

@section('title-page', 'Pembagian Kelas')

@section('content')
	<div class="col s8 offset-s2">
		<table class="table highlight centered responsive-table">
			<thead>
				<tr>
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th style="width: 20px;">Kelas</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>511x100xxx</td>
					<td>Aditya N.</td>
					<td>1</td>
					<td><i class="material-icons">done</i></td>
				</tr>
				<tr>
					<td>2</td>
					<td>511x100xxx</td>
					<td>Adinda P.</td>
					<td>
						<div class="input-field">
							<select id="kelas">
								<option value="" disabled selected>0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>
					</td>
					<td><a href="#!" class="btn waves-effect waves-light">Ok</a></td>
				</tr>
				<tr>
					<td>3</td>
					<td>511x100xxx</td>
					<td>Ananda Q.</td>
					<td>
						<div class="input-field">
							<select id="kelas">
								<option value="" disabled selected>0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>
					</td>
					<td><a href="#!" class="btn waves-effect waves-light">Ok</a></td>
				</tr>
				<tr>
					<td>4</td>
					<td>511x100xxx</td>
					<td>Bagus N.</td>
					<td>
						<div class="input-field">
							<select id="kelas">
								<option value="" disabled selected>0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						</div>
					</td>
					<td><a href="#!" class="btn waves-effect waves-light">Ok</a></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection

@section('script')
	$('select').material_select();
@endsection