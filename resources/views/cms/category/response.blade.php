@if (count($categories) > 0)
{{$i = 1;}}
    @foreach ($categories as $data)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $data->category }}</td>
            <td>{{ $data->slug }}</td>
            <td>{{ $data->date }}</td>
            <td>
                @if ($data->status == 1)
                    <span class="text-success p-2 fw-bolder" style="font-size: 18px;">Active</span>
                @else
                    <span class="text-danger p-2 fw-bolder" style="font-size: 18px;">De-Active</span>
                @endif
            </td>
            <td>
                <a href="{{ route('edit_category', $data->code) }}" class="btn btn-success btn-sm">Edit</a>
                <button class="btn btn-danger delete-category btn-sm" data-id="{{ $data->code }}">Delete</button>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="6">Data Could Not Found</td>
    </tr>
@endif
