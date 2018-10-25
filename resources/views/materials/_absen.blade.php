{{-- {!! Form::model($model, ['method' => 'POST', 'class' => 'form-inline'] ) !!} --}}
@csrf
{{-- <button type="submit" name="masuk" class="btn btn-info"><span class="ti-alarm-clock">&nbsp;Jam Masuk</span></button>
<button type="submit" name="keluar" class="btn btn-danger"><span class="ti-alarm-clock">&nbsp;Jam Keluar</span></button> --}}
<a class="btn btn-info" href="{{ $masuk }}" data-toggle="modal" data-target="#masuk" ><span class="ti-alarm-clock"></span>&nbsp;Jam Masuk</a>
<a class="btn btn-danger" href="{{ $keluar }}" data-toggle="modal" data-target="#keluar"><span class="ti-alarm-clock"></span>&nbsp;Jam Keluar</a>
{{-- {!! Form::close()!!} --}}