<div class="modal fade" id="modal-addOutlet" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kategori Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/outlet" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Nama Outlet</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-store"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Tulis nama outlet di sini" required>
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


    
