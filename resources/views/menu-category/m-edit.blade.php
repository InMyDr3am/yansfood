<div class="modal fade" id="modal-editCategory{{ $cat->id }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/menu/category/{{ $cat->id }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Nama Kategori Menu</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-tags"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{ $cat->name }}" required>
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


    
