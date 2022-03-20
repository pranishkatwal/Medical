<div class="modal fade manufacturer-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Manufacturer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('medicine-manufacturer')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="manufacturer-name" class="col-form-label col-md-3">Manufacturer Name:</label>
                        <input type="text" class="form-control col-md-6" id="manufacturer-name" name="manufacturer_name">
                    </div>

                    <button class="btn btn-success" type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
