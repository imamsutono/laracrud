<div class="form-group">
	{!! Form::label('nama', 'Nama', array('class'=>'col-md-4 control-label')) !!}
	<div class="col-md-6">
		{!! Form::text('nama', null, array('class'=>'form-control'), '') !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('alamat', 'Alamat', array('class'=>'col-md-4 control-label')) !!}
	<div class="col-md-6">
		{!! Form::text('alamat', null, array('class'=>'form-control'), '') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		{!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
		{!! link_to_route('anggota.index', 'Kembali', null, array('class'=>'btn btn-success')) !!}
	</div>
</div>