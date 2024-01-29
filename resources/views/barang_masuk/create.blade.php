<x-template>
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="bi-box"></i> Barang Masuk</h4>
                <hr>
                <form action="{{ route('tambah barang') }}" method="post">
                    @csrf
                    <livewire:kode-barang />
                    {{-- bs5-form-select --}}
                    <div class="mb-3">
                        <label class="form-label">Supplier</label>
                        <select class="form-select" name="supplier">
                            <option selected disabled>--pilih supplier--</option>
                            @foreach ($supplier as $item)
                            <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- bs5-form-input --}}
                    <div class="mb-3">
                      <label class="form-label">Nama Produk</label>
                      <input type="text" class="form-control" name="nama" placeholder="masukan nama produk">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Harga Produk</label>
                      <input type="text" class="form-control" name="harga" placeholder="masukan harga produk">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Qty Masuk</label>
                      <input type="text" class="form-control" name="qty" placeholder="masukan qty produk">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-template>