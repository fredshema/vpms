<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="parts-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($parts as $part)
                <tr>
                    <td>{{ $part->name }}</td>
                    <td>{{ $part->description }}</td>
                    <td>{{ $part->price }}</td>
                    <td>{{ $part->stock }}</td>
                    <td>{{ $part->image }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['parts.destroy', $part->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('parts.show', [$part->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('parts.edit', [$part->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            @if(count($parts) == 0)
                <tr>
                    <td colspan="7" class="text-center">
                        <h5 class="py-5">There are no parts available.</h5>
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $parts])
        </div>
    </div>
</div>
