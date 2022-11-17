<table border=1>
 <th>nama</th>
 <th>harga jual</th>
 <th>harga beli</th>
 <th>jumlah</th>
 

 @foreach($barang as $b)
 <tr>
    <td>{{ $b->nama }}</td>
    <td>{{ $b->harga_jual }}</td>
    <td>{{ $b->harga_beli }}</td>
    <td>{{ $b->qty }}</td>
</tr>@endforeach