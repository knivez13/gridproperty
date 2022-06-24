<div class="table-responsive">
    <table class="table table-centered table-nowrap table-hover table-bordered table-sm mb-2">
        <thead>
            <tr>
                <th scope="col" style="width:5%; ">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Address</th>
                <th scope="col">Bank Details</th>
                <th scope="col">Crypto wallet</th>
                <th scope="col">Status</th>
                <th style="width:7%; ">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->roles->pluck('name')[0] ?? '' }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->bank_details }}</td>
                <td>{{ $data->crypto_wallet }}</td>
                <td>
                    @if($data->status == 0)
                    <span class="badge bg-danger">Inactive</span>
                    @else
                    <span class="badge bg-success">Active</span>
                    @endif
                </td>
                <td class="table-action">
                    <a href="{{ route('user.edit', $data->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    <!-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $list->links() }}