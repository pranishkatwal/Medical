@section('content')
    <div class="container pt-5 col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th>SN:</th>
                <th>Manufacturer Name:</th>
                <th>Created At:</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if($manufacturer)
                @php($sn = 0)
                @foreach($manufacturer as $manufacturer)
                    <tr>
                        <td>{{++$sn}}</td>
                        <td>{{$manufacturer->manufacturer_name}}</td>
                        <td>{{$manufacturer->created_at}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning disabled">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger disabled">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <h3>No any medicine yet</h3>
            @endif
            </tbody>
        </table>
    </div>
@stop