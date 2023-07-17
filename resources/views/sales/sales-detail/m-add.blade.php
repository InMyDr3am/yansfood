<div class="modal fade" id="modal-addDetail{{ $sale->id }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Menu Terjual</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/penjualan/detail/save/{{ $sale->id }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Nama Menu</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard-list"></i></span>
                                </div>
                                <select name="menuId" class="form-control select2bs4">
                                    <option value=""><center>--- Pilih Menu ---</center></option>
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}"> {{ $menu->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Jumlah Terjual</label>
                            <div class="input-group mb-3">
                                <input type="number" min="1" class="form-control" name="qty" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Pcs
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 float-right mb-3">Simpan Data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
      <!-- /.modal-dialog -->
</div>


    
