<div class="table-responsive">
    <table class="table table-centered table-nowrap table-hover table-bordered table-sm mb-2">
        <thead>
            <tr>
                <th scope="col" style="width:5%; ">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th style="width:7%; ">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    @if($data->status == 0)
                    <span class="badge bg-danger">Inactive</span>
                    @else
                    <span class="badge bg-success">Active</span>
                    @endif
                </td>
                <td class="table-action">
                    <a href="{{ route('priorityunder.edit', $data->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    <!-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $list->links() }}