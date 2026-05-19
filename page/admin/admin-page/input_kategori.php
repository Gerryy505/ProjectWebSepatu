<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Input Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9fafb;
      font-family: "Inter", sans-serif;
    }
    .sidebar {
      width: 240px;
      height: 100vh;
      background: #fff;
      border-right: 1px solid #e5e7eb;
      position: fixed;
      left: 0;
      top: 0;
      padding: 20px;
    }
    .sidebar h4 { font-size: 20px; margin-bottom: 30px; text-align: center; }
    .sidebar a {
      display: block; padding: 10px 15px; color: #333; text-decoration: none;
      border-radius: 8px; margin-bottom: 5px; transition: background 0.2s;
    }
    .sidebar a:hover, .sidebar a.active { background-color: #007bff; color: white; }

    .main-content { margin-left: 260px; padding: 20px; }
    .topbar {
      display: flex; justify-content: flex-end; align-items: center;
      background: white; padding: 10px 20px; border-bottom: 1px solid #e5e7eb;
      border-radius: 8px; margin-bottom: 20px;
    }
    .form-card, .result-card {
      background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      padding: 35px; max-width: 1100px; margin: auto;
    }
    .form-card h5, .result-card h5 {
      text-align: center; margin-bottom: 30px; color: #333;
      font-size: 22px; font-weight: 600;
    }
    .btn-edit { background-color: #ffc107; color: white; border: none; }
    .btn-delete { background-color: #dc3545; color: white; border: none; }
    .btn-edit:hover { background-color: #e0a800; }
    .btn-delete:hover { background-color: #c82333; }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4>Logo</h4>
    <a href="#" class="active">Dashboard</a>
    <a href="#">Typography</a>
    <a href="#">Color</a>
    <a href="#">Icons</a>
  </div>

 

    <!-- Form Input -->
    <div class="form-card">
      <h5>Form Input Data</h5>
      <form id="inputForm">
        <input type="hidden" id="editIndex" value="-1">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Nama</label>
            <input type="text" id="nama" class="form-control form-control-lg" placeholder="Masukkan nama lengkap" required>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Harga</label>
            <input type="tel" id="harga" class="form-control form-control-lg" placeholder="Masukkan Harga" required>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea id="alamat" class="form-control form-control-lg" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Kategori</label>
            <select id="kategori" class="form-select form-select-lg" required>
              <option value="">-- Pilih Kategori --</option>
              <option value="Basketball">Basketball</option>
              <option value="Tenis">Tenis</option>
              <option value="Runing">Runing</option>
              <option value="Voley">Voley</option>
              <option value="Style">Style</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Ukuran</label>
            <input type="tel " id="ukuran" class="form-control form-control-lg" placeholder="Masukkan ukuran (30, 31, 32, dll)" required>
          </div>
        </div>

        <div class="d-grid mt-4">
          <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">Kirim</button>
        </div>
      </form>
    </div>

    <!-- Hasil Input -->
    <div class="result-card mt-5">
      <h5>Daftar Data Input</h5>
      <table class="table table-bordered table-striped align-middle text-center" id="dataTable">
        <thead class="table-primary">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kategori</th>
            <th>Ukuran</th>
            <th>harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>



<script>
document.getElementById('inputForm').addEventListener('submit', async function(e) {
    e.preventDefault(); // Cegah reload halaman

    const nama = document.getElementById('nama').value;
    const harga = document.getElementById('harga').value;
    const alamat = document.getElementById('alamat').value;
    const kategori = document.getElementById('kategori').value;
    const ukuran = document.getElementById('ukuran').value;

    const data = {
        nama,
        harga,
        alamat,
        kategori,
        ukuran
    };

    try {
        const response = await fetch('simpan.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (result.status === 'success') {
            alert(result.message);
            document.getElementById('inputForm').reset();
        } else {
            alert('Error: ' + result.message);
        }
    } catch (error) {
        alert('Terjadi kesalahan saat mengirim data: ' + error.message);
    }
});
</script>


</body>
</html>
