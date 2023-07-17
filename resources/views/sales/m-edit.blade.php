<div class="modal fade" id="modal-editSales{{ $sale->id }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Outlet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/penjualan/{{ $sale->id }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-12"> 
                            <label>Nama Pembeli</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                </div>
                                <input type="text" name="customerName" class="form-control" required value="{{ $sale->customer->name }}">
                            </div>
                            <label>Outlet</label>
                            <div class="input-group-prepend mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-store"></i></span>
                                <select class="form-control" style="width: 100%;" name="outletId" required>
                                <option selected disabled>Pilih Outlet </option>
                                    @foreach ($outlets as $outlet)
                                        <option value="{{ $outlet->id }}"  {{ $outlet->id == $sale->outlet_id ? 'selected="selected"' : '' }}>{{ $outlet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label>No Pesanan</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                                </div>
                                <input type="text" name="noOrder" class="form-control" value="{{ $sale->no_order }}">
                            </div>
                            <label>Tanggal Penjualan</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                                </div>
                                <input type="date" name="salesDate" class="form-control" required value="{{ $sale->sales_date->format('Y-m-d') }}">
                            </div>
                            <label>Total Penjualan</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" name="totalPrice" class="form-control" required
                                value="{{ number_format($sale->total_price) }}" 
                                id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 float-right">Simpan Data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
      <!-- /.modal-dialog -->
</div>


    
