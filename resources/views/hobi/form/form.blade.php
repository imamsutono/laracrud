<div class="form-group">
	{!! Form::label('hobi', 'Hobi', array('class'=>'col-md-1 control-label')) !!}
</div>
<div class="form-group">
	<div class="col-md-12">
		{!! Form::text('hobi', null, array('class'=>'form-control'), '') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
		{!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
	</div>
</div>