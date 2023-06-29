@if (count($sub_categories) > 0)
{{$i = 1;}}
    @foreach ($sub_categories as $data)
        <tr>
            {{-- <td>
                <div class="media"><img class="rounded-circle img-70 me-3" src="/admin/vechile-owner/{{ $data->image }}"
                        alt="Generic placeholder image">
                    <div class="media-body align-self-center">
                        <div>{{ $data->name }}</div>
                    </div>
                </div>
            </td> --}}
            <td>{{ $i++ }}</td>
            <td>{{ $data->category }}</td>
            <td>{{ $data->sub_category }}</td>
            <td>{{ $data->sub_slug }}</td>
            <td>{{ $data->date }}</td>
            <td>
                @if ($data->status == 1)
                    <span class="text-success p-2 fw-bolder" style="font-size: 18px;">Active</span>
                @else
                    <span class="text-danger p-2 fw-bolder" style="font-size: 18px;">De-Active</span>
                @endif
            </td>
            <td>
                <a href="{{ route('edit_sub_category', $data->code) }}" class="btn btn-success btn-sm">Edit</a>
                <button class="btn btn-danger delete-sub-category btn-sm" data-id="{{ $data->code }}">Delete</button>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="7">Data Could Not Found</td>
    </tr>
@endif
