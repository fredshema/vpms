<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Part Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('part_id', 'Part Id:') !!}
    {!! Form::number('part_id', null, ['class' => 'form-control', 'required']) !!}
</div>