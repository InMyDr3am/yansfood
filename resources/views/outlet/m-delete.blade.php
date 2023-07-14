<div class="modal fade" id="modal-deleteOutlet{{ $outlet->id }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Outlet</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/outlet/{{ $outlet->id }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('delete')
                    <div class="row">
                        <div class="col-sm-12">
                            Apakah yakin untuk menghapus outlet dengan nama <b> {{ $outlet->name }}  </b> ?
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 float-right">Yakin</button>
                    <button type="button" class="btn btn-secondary mt-2 mr-2 float-right" data-dismiss="modal">Tidak</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
      <!-- /.modal-dialog -->
</div>
    
