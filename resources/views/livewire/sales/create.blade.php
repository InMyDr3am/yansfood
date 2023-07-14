<form action="/penjualan" method="POST">
    @csrf
    <div class="row">
        <!-- Date -->
        <div class="col-sm-6">
            <label>Penjual</label>
            <div class="input-group-prepend mb-3">
                <span class="input-group-text"><i class="fa-solid fa-store"></i></span>
                <select class="form-control" style="width: 100%;" name="seller_id" required>
                <option selected disabled>Pilih Penjual </option>
                    @foreach ($sellers as $seller)
                        <option value="{{ $seller->id }}">{{ $seller->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <label>Tanggal Penjualan</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                </div>
                <input type="date" name="date" class="form-control">
            </div>
        </div>
        <div class="col-sm-6">
            <label>Total Penjualan</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                </div>
                <input type="number" name="total_price" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-6">
            <label>No Resi</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                </div>
                <input type="text" name="no_resi" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-6">
            <label>No Pesanan</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                </div>
                <input type="text" name="no_order" class="form-control" required>
            </div>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-sm-6">
            <label>Nama Pembeli</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" name="buyer_name" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-6">
            <label>Telp. Pembeli</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                </div>
                <input type="text" name="buyer_phone" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-6">
            <label>Alamat Pembeli</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                </div>
                <textarea class="form-control" rows="3" name="buyer_address" required></textarea>
            </div>
        </div>
    </div><hr>
    <label>List Produk Yang Terjual </label>
    <div class="card col-sm-10">   
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th style="text-align: center; width:2%;">No.</th>
                    <th style="text-align: center; width:65%;">Nama Produk - Size - Warna</th>
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
                                    <select name="salesDetail[{{$index}}][stock_id]"
                                            wire:model="salesDetail.{{$index}}.stock_id"
                                            class="form-control select2bs4">
                                        <option value=""><center>--- Pilih Produk ---</center></option>
                                        @foreach ($stocks as $stc)
                                        @if($stc->stock > 0 )
                                            <option value="{{ $stc->id }}"> {{ $stc->product->name }} - {{ $stc->vsize->name }} - {{ $stc->vcolour->name }} || {{ $stc->stock }}</option>
                                        @endif
                                            @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">     
                                <input type="number" name="salesDetail[{{$index}}][qty]"
                                    class="form-control" wire:model="salesDetail.{{$index}}.qty">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">pcs</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <center>
                                    <a href="#" wire:click.prevent="removeStockProduct({{$index}})" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
            <div class="row float-sm-right">
                <div class="col-md-12 ">
                    <button class="btn btn-sm btn-secondary"
                        wire:click.prevent="addStockProduct">+ Add Another Product</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
    </div>
</form>

