<table class = "table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>nama_barang</th>
            <th>harga</th>
            <th>stok</th>
            <th>id_suplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
        <tr>
            <td>{{$barang -> id}}</td>
            <td>{{$barang -> nama_barang}}</td>
            <td>{{$barang -> harga}}</td>
            <td>{{$barang -> stok}}</td>
            <td>{{$barang -> id_suplier}}</td>
        </tr>
        @endforeach
    </tbody>
</table>