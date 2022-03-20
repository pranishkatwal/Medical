<table class="table">
    <thead>
    <tr>
        <th>SN:</th>
        <th>Medicine</th>
        <th>Selling Price</th>
        <th>Available Qty</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($medicine))
        @php($sn = 0)
        @foreach($medicine as $medicine)
            <tr>
                <td>{{++$sn}}</td>
                <td>{{$medicine->medicine_name}}</td>
                <td>{{$medicine->selling_price}}</td>
                <td>{{$medicine->total_quantity}}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning disabled">Edit</a>
                    <a href="#" disabled class="btn btn-sm btn-danger disabled">Delete</a>
                </td>
            </tr>
        @endforeach
    @else
        <h3>No any medicine yet</h3>
    @endif
    </tbody>
</table>
