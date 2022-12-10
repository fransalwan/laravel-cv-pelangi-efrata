<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="/css/dashboard.css" rel="stylesheet">

<div class="border" style="margin-bottom: 10px;">
      <p  style="font-size: 20px; padding:10px;">CV PELANGI EFRATA</p>
      <p class="text-end" style="font-size: 20px; padding:10px;">Laporan Pembelian </p>
</div>
 
  
  <table class="table border" id="table">
        <thead class="text-center border">
          <tr>
            <th class="border">No</th>
            <th class="border">Tanggal Transaksi</th>
            <th class="border">Nama Supplier</th>
            <th class="border">Nama Barang</th>
            <th class="border">Harga/Kg</th>
            <th class="border">Berat</th>
            <th class="border">Sub Total</th>
          </tr>
        </thead>
        <tbody class="text-center border">
            @foreach ($cetakPertanggal as $book)
            <tr class="text-center border">
              <td class="border">{{ $loop->iteration }}</td>
              <td class="border">{{ $book->tanggal }}</td>
              <td class="border">{{ $book->supplier->name }}</td>
              <td class="border">{{ $book->name }}</td>
              <td class="border">{{ $book->harga_per_kilo }}</td>
              <td class="border">{{ $book->berat }}</td>
              <td class="border">{{ $book->sub_total }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <span id="val" style="font-size: 20px; text-center; " class="text-end"></span>

      {{-- Menjumlahkan sub_total --}}

      <script>

        var table = document.getElementById("table"), sumVal = 0;
  
        for(var i = 1; i < table.rows.length; i++)
        {
          sumVal  = sumVal + parseInt(table.rows[i].cells[6].innerHTML);
        }
  
        document.getElementById("val").innerHTML = "Total : Rp. " + sumVal;
      </script>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    
    <script src="/js/dashboard.js"></script>