<x-template>
    <div class="8 mx-auto">
        {{-- bs5-card-default --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Barang Masuk</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Supplier</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangMasuk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->supplier->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-template>