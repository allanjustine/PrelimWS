<div class="table-responsive">
    <table class="table" id="pricings-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pricings as $pricing)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['pricings.destroy', $pricing->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pricings.show', [$pricing->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pricings.edit', [$pricing->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
