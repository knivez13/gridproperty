<table class="table table-hover table-bordered table-sm mb-2">
    <thead>
        <tr>
            <th style="width:5%;" scope="col">#</th>
            <th scope="col">Address</th>
            <th scope="col">Property Type</th>
            <th scope="col">Listing Id</th>
            <th scope="col">Type</th>
            <th scope="col">Owner</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Email</th>
            <th style="width:10%;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $data)
        <tr>
            <th scope="row">{{ $data->id }}</th>
            <td>{{ $data->address }}</td>
            <td>{{ $data->property_type_id }}</td>
            <td>{{ $data->listing_id }}</td>
            <td>{{ $data->type_id }}</td>
            <td>{{ $data->owner }}</td>
            <td>{{ $data->contact_number }}</td>
            <td>{{ $data->email }}</td>
            <td class="table-action">
                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $list->links() }}