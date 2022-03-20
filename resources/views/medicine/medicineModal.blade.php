<div class="modal fade medicine-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Medicine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('store-medicine')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="manufacturer-name" class="col-form-label col-md-3">Medicine Name:</label>
                        <input type="text" class="form-control col-md-6" id="medicine-name" name="medicine_name">
                        @if($errors->has('manufacturer_name'))
                            <p class="text-danger">{{ $errors->first('medicine_name') }}</p>
                        @endif
                    </div>
                    <button class="btn btn-success" type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
