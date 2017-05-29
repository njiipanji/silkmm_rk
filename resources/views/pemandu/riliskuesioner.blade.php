@extends('layouts.pemandu')

@section('title', 'Rilis Kuesioner')

@section('title-page', 'Rilis Kuesioner')

@section('content')
	<div class="row center">
		<div class="col s8 offset-s2">
			<h5>Materi 2</h5>
			<form>
				<div class="row">
					<div class="switch col s8 offset-s2">
						<h1>
							<label>
								Tutup
								<input type="checkbox" name="rilis">
								<span class="lever"></span>
								Buka
							</label>
						</h1>
					</div>
					<div class="col s8 offset-s2" style="margin-top: 30px;">
						<a href="{{url('/pemandu/buat/daftarkuesioner')}}" class="btn waves-effect waves-light">GO</a>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection