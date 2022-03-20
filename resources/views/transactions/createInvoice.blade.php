@section('title')
    <title>Medicine</title>
@stop

@extends('layouts.admin')

@section('content')
    <div class=" container-fluid">
        <div class="form-group row">

            <div class="col-md-12" id="printBill">
            </div>
            <div class="col-md-12 row mt-2" id="fName">
                <label for="Customer Name" class="col-sm-2 "><span class="float-right">Customer Name:</span></label>
                <div class="col-md-9">
                    <input type="text" class="form-control full Name"
                           id="customer_name" name="customer_name">
                </div>
            </div>

            <div class="col-md-12 row mt-2">
                <label for="Table Name" class="col-sm-2"><span class="float-right"> Select Medicine:</span></label>
                <div class="col-md-9">
                    <select class="form-control select_medicine" id="select_medicine" name="medicine_id">
                        <option value="">!!!!! Select Medicine !!!!!</option>
                        @if(isset($medicine))
                            @foreach($medicine as $medicine)
                                <option value="{{$medicine->id}}"
                                        data-rate="{{$medicine->selling_price}}"
                                        data-stock="{{$medicine->total_quantity}}">
                                    {{$medicine->medicine_name}}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>


            <div class="col-md-12 row mt-2">
                <label for="Table Name" class="col-sm-2"><span
                            class="float-right">Contact:</span></label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="contact" name="contact">
                </div>
            </div>


            <div class="col-md-12 row mt-2 ">
                <label for="date" class="col-sm-2"><span class="float-right"> Date</span></label>
                <div class="col-md-9">
                    <input type="date" class="form-control form-control-sm" id="checkOutdate">
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="col-md-12 mt-3">
                    <table id="checkOutOrderTable" class="table table-sm mt-1 table-responsive-sm">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Medicine</th>
                            <th>Quantity</th>
                            <th>Available Quantity</th>
                            <th>rate</th>
                            <th class="w-25">total</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>


                <div class="col-md-12  row">
                    <div class="col-md-6 mt-3">
                        <div class="form-group row">
                            <label for="subTotal" class="col-sm-4">Sub Amount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="subTotal" name="subTotal"
                                       disabled="true" value="">
                                <input type="hidden" class="form-control" id="subTotalValue"
                                       name="subTotalValue" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">

                        <div class="form-group row">
                            <label for="vat" class="col-sm-4 control-label">VAT 13%</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="vat" name="vat" disabled="true"
                                       value=" 13 % ">
                                <input type="hidden" class="form-control" id="vatValue" name="vatValue"
                                       value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group row">
                            <label for="totalAmount" class="col-sm-4 control-label">Total Amount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="totalAmount" name="totalAmount"
                                       disabled="true" value="">
                                <input type="hidden" class="form-control"
                                       id="totalAmountValue" name="totalAmountValue" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group row">
                            <label for="discount" class="col-sm-4 control-label">Discount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control discount" id="discount" name="discount"
                                       onkeyup="discountAmt()" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="grandTotal" class="col-sm-4 control-label">Grand Total</label>
                            <div class="col-sm-8">
                                <input type="text" disabled class="form-control" id="grandTotal"
                                       name="grandTotal">
                            </div>
                        </div> <!--/form-group-->
                    </div>


                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="grandTotal" class="col-sm-4 control-label">Paid Amount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="paidAmount" name="paidAmount"
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <button class="btn btn-danger btn-sm" id="saveCheckOutOrderBtn" onclick="checkOutBlll()">Save
                    </button>
                </div>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script>
      let sn = 0;
      let selectedMedicine = [];
      let medicineData = {rate: 0, qty: 0}
      let error = false;
      let granTotal = 0;
      let button = $("<button class='remove'> </button>")
      let medicine = $("<input type='number' class='medicine_quantity' />")

      $(() => {
        $('.select_medicine').on('change', function () {
          let medicineName = $(this).find('option:selected').text();
          let rate = $(this).find(':selected').attr('data-rate')
          let availableQuantity = $(this).find(':selected').attr('data-stock')
          let medicine_id = $(this).val()

          //return false if already selected
          if (selectedMedicine[medicine_id]) {
            return false;
          }

          selectedMedicine[medicine_id] = {rate: rate, qty: 0, total: 0}
          var tableData = '';
          tableData += '<tr><td> ' + ++sn + ' </td>';
          tableData += '<td><input type="text" class="form-control" disabled name="medicine_name[]" id="medicine_name" data-id="' + medicine_id + '" value="' + medicineName + '"></td>';
          tableData += '<td><input type="number" class="form-control medicine_quantity" name="qty[]"  value=""></td>';
          tableData += '<td><input type="text" class="form-control availableQuantity" disabled value=" ' + availableQuantity + '"></td>';
          tableData += '<td><input type="text" class="form-control rate" disabled value= "' + rate + ' " ></td>';
          tableData += '<td><input type="number" class="form-control total" disabled="" value="" ></td>';
          tableData += '<td><button class="btn btn-danger remove" type="button"  id="removeBtn" ><i class="fas fa-trash"></i></button></td>';
          $('#checkOutOrderTable').append(tableData);
        })
      });

      $('body').on('keyup', '.medicine_quantity', function () {
        $(this).closest('td').find('.error').remove()
        let selectedQuantity = $(this).val()
        let availableQuantity = $(this).closest('tr').find('.availableQuantity').val()
        let rate = $(this).closest('tr').find('.rate').val()
        let medicine_id = $(this).closest('tr').find('#medicine_name').attr('data-id')
        if (parseInt(selectedQuantity) > parseInt(availableQuantity)) {
          let errorMsg = 'selected quantity is more than availableQuantity'
          let html = '<p class="error text-danger">' + errorMsg + '</p>'
          $(this).closest('td').append(html)
          error = true;
          return false;
        }
        let total = parseInt(selectedQuantity) * parseInt(rate);
        selectedMedicine[medicine_id].total = total;
        selectedMedicine[medicine_id].qty = selectedQuantity;
        $(this).closest('tr').find('.total').val(total)

        calculateTotal();
      });

      const calculateTotal = () => {
        let grandTotal = 0;
        if (isNaN(grandTotal)) {
          grandTotal = 0;
        }

        selectedMedicine.forEach((k, v) => {
          console.log(k)
          grandTotal += k.total
        })
        $('#grandTotal').val(grandTotal)
        $('#subTotal').val(grandTotal)
      }


      $(document).on('click', 'button', function () {
        let id = $(this).closest('tr').find('#medicine_name').attr('data-id')
        selectedMedicine.splice(id, 1)
        $(this).closest('tr').remove()
        calculateTotal()
      })

      const discountAmt = () => {
        calculateTotal()
        let discountAmount = $('.discount').val()
        let grandTotal = $('#grandTotal').val()
        if (isNaN(grandTotal || discountAmount)) {
          return $('#grandTotal').val(0)
        }
        let total = parseFloat(grandTotal) - parseFloat(discountAmount)
        $('#grandTotal').val(total)
      }

    </script>
@stop
