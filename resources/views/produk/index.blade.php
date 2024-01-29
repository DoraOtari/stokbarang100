<x-template>
    @if (session('pesan')) 
        <div class="alert" role="alert">
            <strong><i class="bi bell"></i></strong> {{ session('pesan') }}
        </div>
        
    @endif
    <div class="col-10">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Produk</h4>
                <hr>
                {{-- bs5-table-default --}}
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">R1C1</td>
                                <td>R1C2</td>
                                <td>R1C3</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Item</td>
                                <td>Item</td>
                                <td>Item</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</x-template>