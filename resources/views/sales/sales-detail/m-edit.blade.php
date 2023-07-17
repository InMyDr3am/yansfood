<div class="modal fade" id="modal-editDetail{{ $salDet->id }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/penjualan/detail/{{ $salDet->id }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Nama Menu</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-clipboard-list"></i></span>
                                </div>
                                <select name="menuId" class="form-control select2bs4" required>
                                    @foreach ($menus as $menu)
                                    <option value="{{ $menu->id }}"  {{ $menu->id == $salDet->menu_id ? 'selected="selected"' : '' }}>{{ $menu->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Jumlah Terjual</label>
                            <div class="input-group mb-3">
                                <input type="number" min="1" class="form-control" name="qty" required value="{{ $salDet->qty }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Pcs
                                    </span>
                                </div>
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


    
