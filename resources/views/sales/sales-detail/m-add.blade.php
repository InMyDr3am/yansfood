<div class="modal fade" id="modal-addMenu" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/menu" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Nama Menu</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-utensils"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Tulis nama menu di sini" required>
                            </div>
                            <label>Kategori Menu</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-tags"></i></span>
                                </div>
                                <select required name="menuCategoryId" class="form-control select2bs4">
                                    <option value=""><center>--- Pilih Kategori Menu ---</center></option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Jumlah Stock Persediaan</label>
                            <div class="input-group mb-3">
                                <input type="number" min="1" class="form-control" name="qty_stock" required>
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


    
