<div class="modal fade" id="modal-editMenu{{ $menu->id }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/menu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Nama Menu</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-utensils"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{ $menu->name }}" required>
                            </div>
                            <label>Kategori Menu</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-tags"></i></span>
                                </div>
                                <select required name="menuCategoryId" class="form-control select2bs4">
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}"  {{ $cat->id == $menu->menu_category_id ? 'selected="selected"' : '' }}>{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Jumlah Stock Yang Ada</label>
                            <div class="input-group mb-3">
                                <input type="number" min="1" class="form-control" name="qty_stock" required value="{{ $menu->qty_stock }}">
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


    
