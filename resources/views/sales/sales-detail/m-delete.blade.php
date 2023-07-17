<div class="modal fade" id="modal-deleteMenu{{ $menu->id }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/menu/{{ $menu->id }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('delete')
                    <div class="row">
                        <div class="col-sm-12">
                            Apakah yakin untuk menghapus menu dengan nama <b> {{ $menu->name }}  </b> ?
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
    
