<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Waduk Darma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
      body {
        font-family: 'Roboto', sans-serif;
      }
    </style>
  </head>
  <body style="background-color: #e0f7fa">
    <!-- Header -->
    <header class="navbar navbar-expand-lg narvbar-light" style="background-color: #e0f7fa">
      <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <img alt="Waduk Darma Logo" class="h-12" height="50" src="asset/image/logowd.jpg" width="50" />
        <nav class="flex space-x-20">
          <a class="text-gray-700" href="index.php"> Home </a>
          <a class="text-gray-700" href="index.php"> About </a>
          <a class="text-gray-700" href="index.php"> Ticket </a>
          <a class="text-gray-700" href="index.php"> Explore </a>
          <a class="text-gray-700" href="index.php"> Activity </a>
          <a class="text-gray-700" href="index.php" class="teks">Pemesanan</a>
		  <a class="text-black-700" href="main/daftar.php" class="teks">Daftar</a>
        </nav>
        
    </header>
</div>
<div class="container mx-auto py-4">
 <div class="relative">
  <input class="w-full py-2 px-4 rounded-full border border-gray-300" placeholder="Search" type="text"/>
  <i class="fas fa-search absolute right-4 top-3 text-gray-500">
  </i>
 </div>
    

    
<main class="flex-shrink-0">
</header>
<main class="flex-shrink-0">
  <div class="container">
    <form method="post" action="lib/proses.php">
<div class="card mt-2">
  <div class="card-header bg-dark text-white">
    Form Pemesanan Paket Wisata
  </div>
  <div class="card-body">
	<div class="mb-3">
	  <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
	  <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
	</div>
	<div class="mb-3">
	  <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
	  <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
	</div>
	<div class="mb-3">
	  <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
	  <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
	</div>
	<div class="mb-3">
	  <label for="hari_wisata" class="form-label">Hari Wisata</label>
	  <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap">
		  <label class="form-check-label" for="paket_inap">
			Penginapan (Rp. 1.000.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport">
		  <label class="form-check-label" for="paket_transport">
			Transportasi (Rp. 1.200.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan">
		  <label class="form-check-label" for="paket_makan">
			Service/ Makan (Rp. 500.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	  <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
	  <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
	</div>
	<div class="mb-3">
	  <label for="harga" class="form-label">Harga Paket</label>
	  <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly>
	</div>
	<div class="mb-3">
	  <label for="total" class="form-label">Total Tagihan</label>
	  <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly>
	</div>
  </div>
  <div class="card-footer">
    <input type="submit" class="btn btn-primary" value="Simpan">
	<input type="reset" class="btn btn-danger" value="Ulangi">
  </div>
</div>
<script>
//tentukan konstanta biaya masing-masing
const paket_inap = 1000000;
const paket_transport = 1200000;
const paket_makan = 500000;

function updateTotalCost()
{
	//inisisi harga paket 0
	let totalCost = 0;
	
	//referensi dari checkbox
	const inapCheckbox = document.getElementById('paket_inap');
	const transportCheckbox = document.getElementById('paket_transport');
	const makanCheckbox = document.getElementById('paket_makan');
	
	//jika inap checkbox ter-check
	if(inapCheckbox.checked)
	{
		totalCost+=paket_inap;
	}
	
	//jika transport checkbox ter-check
	if(transportCheckbox.checked)
	{
		totalCost+=paket_transport;
	}
	
	//jika makan checkbox ter-check
	if(makanCheckbox.checked)
	{
		totalCost+=paket_makan;
	}
	
	document.getElementById('harga').value = totalCost;
}

function updateTotal()
{
	let TotalTagihan = 0;
	
	var hari_wisata = document.getElementById('hari_wisata').value;
	var jumlah_peserta = document.getElementById('jumlah_peserta').value;
	var harga = document.getElementById('harga').value;
	
	TotalTagihan = hari_wisata * jumlah_peserta * harga;
	
	document.getElementById('total').value = TotalTagihan;
}

document.getElementById('paket_inap').addEventListener('change', updateTotalCost);
document.getElementById('paket_transport').addEventListener('change', updateTotalCost);
document.getElementById('paket_makan').addEventListener('change', updateTotalCost);

document.getElementById('paket_inap').addEventListener('change', updateTotal);
document.getElementById('paket_transport').addEventListener('change', updateTotal);
document.getElementById('paket_makan').addEventListener('change', updateTotal);

document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);

document.getElementById('hari_wisata').addEventListener('change', updateTotal);
document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);

updateTotalCost();
updateTotal();
</script>  </div>
</main>

  <!-- Footer -->
  <footer style="background-color: #e0f7fa">
    <div class="container mx-auto text-center">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
      </div>
      <p class="text-gray-700">© 2024 Waduk Darma. All rights reserved</p>
    </div>
  </footer>
</body>
</html>
