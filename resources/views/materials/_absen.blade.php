{!! Form::model($model, ['url' => $delete_url, 'method' => 'delete', 'class' => 'form-inline'] ) !!}
<a class="btn btn-default" href="{{ $edit_url }}"><span class="ti-alarm-clock">&nbsp;Jam Masuk</span></a> {{--
<form method="post" action="{{ $delete_url }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="DELETE">

    <button type="submit" class="btn btn-danger"><span class="ti-trash"></span></button>
</form> --}} {{-- {!! Form::submit('Delete', ['class'=>'btn btn-xs btn-danger']) !!} --}}
<button type="submit" class="btn btn-danger"><span class="ti-alarm-clock">&nbsp;Jam Keluar</span></button>
{!! Form::close()!!}