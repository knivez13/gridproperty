<div class="table-responsive">
    <table class="table table-centered table-nowrap table-hover table-bordered table-sm mb-2">
        <thead>
            <tr>
                <th scope="col">Address</th>
                <th scope="col">Property Type</th>
                <th scope="col">Listing Id</th>
                <th scope="col">Type</th>
                <th scope="col">Status</th>
                <th scope="col">Priority</th>
                <th scope="col">Priority Under</th>
                <th scope="col">Delivery Unit</th>
                <th scope="col">Owner</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email</th>
                <th style="width:7%; ">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $data)
            <tr>
                <td>{{ $data->address }}</td>
                <td>{{ $data->propertytype->name}}</td>
                <td>{{ $data->listingid->name }}</td>
                <td>{{ $data->listingtype->name }}</td>
                <td>{{ $data->status->name }}</td>
                <td>{{ $data->priority->name }}</td>
                <td>{{ $data->priorityunder->name }}</td>
                <td>{{ $data->deliveryunit->name }}</td>
                <td>{{ $data->owner }}</td>
                <td>{{ $data->contact_number }}</td>
                <td>{{ $data->email }}</td>
                <td class="table-action">
                    <a href="{{ route('property.show', $data->id) }}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <a href="{{ route('property.edit', $data->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    <!-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $list->links() }}