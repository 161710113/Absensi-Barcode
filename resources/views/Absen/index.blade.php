@extends('layouts.admin')

@section('content')
 <div class="content">
            <div class="container-fluid">
                <div class="row">
						{{-- <div class="col-md-12">
								<div class="card">
									<div class="header">
										<h4 class="title">Pegawai</h4>
										<p class="category">Pegawai PTIPD</p>										
									</div>
									<div class="content table-responsive table-full-width">
										<table class="table table-striped">
								  <thead>
								  <tr>									
									<th>NIP</th>
									<th>Nama</th>									
								  <th colspan="2">Aksi</th>
								  </tr>
								  </thead>
								  <tbody>									  
									  @foreach($pegawai as $data)
									<tr>									
									<td><p>{{ $data->nip }}</p></td>
									<td><p>{{ $data->nama }}</p></td>									
									<td>
										
									</td>
									<td>
										
									</td>
								  </tr>
								  @endforeach	
								  </tbody>
								</table>
							</div>
						</div>
					</div> --}}
                    <div class="col-md-12">
                        <div class="card">
							<div class="header">
                                <h4 class="title">Data Pegawai</h4>
								<p class="category">Data Kehadiran Pegawai UIN Sunan Gunung Djati</p>
								{{-- <div class="panel pull-right">
									<a class="btn btn-success" href="{{ route('absen.create') }}"><span class="ti-alarm-clock"></span>&nbsp;&nbsp;Jam Masuk</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="btn btn-danger" href=""><span class="ti-alarm-clock"></span>&nbsp;&nbsp;Jam Keluar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</div> --}}
							</div>
							{{-- <div class="content table-responsive table-full-width">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>NIP</th>
											<th>Nama Pegawai</th>
											<th>Tanggal</th>
											<th>Jam Masuk</th>
											<th>Jam Keluar</th>						
										</tr>
									</thead>
										<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($absen as $data)
				  	  <tr>
						<td>{{ $no++ }}</td>
						<td><p>{{ $data->pegawai->nip }}</p></td>
						<td><p>{{ $data->pegawai->nama }}</p></td>
						<td><p>{{ $data->tanggal }}</p></td>
						<td><p>{{ $data->jam_masuk }}</p></td>
						<td><p>{{ $data->jam_keluar }}</p></td>												
				      </tr>
				      @endforeach	
				  	</tbody>
                    </table>
				</div> --}}
				<div class="panel-body">
					{!! $html->table(['class'=>'table-striped']) !!}
				</div>
			</div>			
        </div>
    </div>
</div>
 </div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection