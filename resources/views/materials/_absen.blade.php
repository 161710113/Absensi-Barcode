{!! Form::model($model, ['url' => $jam,'action' => 'absen', 'method' => 'POST', 'class' => 'form-inline'] ) !!}
@csrf
<button type="submit" name="masuk" class="btn btn-info"><span class="ti-alarm-clock">&nbsp;Jam Masuk</span></button>
<button type="submit" name="keluar" class="btn btn-danger"><span class="ti-alarm-clock">&nbsp;Jam Keluar</span></button>
{!! Form::close()!!}