<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $order->customer_id }}</p>
</div>

<!-- Part Id Field -->
<div class="col-sm-12">
    {!! Form::label('part_id', 'Part Id:') !!}
    <p>{{ $order->part_id }}</p>
</div>

