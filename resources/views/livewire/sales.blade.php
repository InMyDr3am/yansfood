<form action="/penjualan" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <label>Nama Pembeli</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" name="customer_name" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-6">
            <label>Outlet</label>
            <div class="input-group-prepend mb-3">
                <span class="input-group-text"><i class="fa-solid fa-store"></i></span>
                <select class="form-control" style="width: 100%;" name="outlet_id" required>
                <option selected disabled>Pilih Outlet </option>
                    @foreach ($outlets as $outlet)
                        <option value="{{ $outlet->id }}">{{ $outlet->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <label>No Pesanan</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                </div>
                <input type="text" name="no_order" class="form-control">
            </div>
        </div>
        <div class="col-sm-6">
            <label>Tanggal Penjualan</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                </div>
                <input type="date" name="sales_date" class="form-control">
            </div>
        </div>
        <div class="col-sm-6">
            <label>Total Penjualan</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                </div>
                <input type="text" name="total_price" class="form-control" required 
                id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
            </div>
        </div>
    </div><hr><hr>
    <label>List menu yang dipesan </label>
    <div class="card col-sm-10">   
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th style="text-align: center; width:2%;">No.</th>
                    <th style="text-align: center; width:65%;">Nama Menu</th>
                    <th style="text-align: center; width:18%;">Qty</th>
                    <th style="text-align: center; width:15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($salesDetail as $index => $sdt)
                        <tr>
                            <td>
                                {{ $index + 1 }}
                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-clipboard-list"></i></span>
                                    </div>
                                    <select name="salesDetail[{{$index}}][menu_id]"
                                            wire:model="salesDetail.{{$index}}.menu_id"
                                            class="form-control select2bs4">
                                        <option value=""><center>--- Pilih Menu ---</center></option>
                                        @foreach ($menus as $menu)
                                        @if($menu->qty_stock > 0 )
                                            <option value="{{ $menu->id }}"> {{ $menu->name }} </option>
                                        @endif
                                            @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">     
                                <input type="text" name="salesDetail[{{$index}}][qty]"
                                    class="form-control" wire:model="salesDetail.{{$index}}.qty"
                                    id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">pcs</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <center>
                                    <a href="#" wire:click.prevent="removeMenu({{$index}})" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
            <div class="row float-sm-right">
                <div class="col-md-12 ">
                    <button class="btn btn-sm btn-secondary"
                        wire:click.prevent="addMenu">+ Tambah Pesanan</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
    </div>
</form>

