<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .search-box { margin-bottom: 15px; }
    </style>
</head>
<body>

    <h2>Kasir Ende</h2>
    <p><a href="#">Katalog</a></p>

    <h1>Katalog Produk</h1>
    <p>Harga dan stok toko</p>

    <div class="search-box">
        <input type="text" placeholder="Cari nama produk..." size="30">
        <button type="button">Cari</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">Kopi Ende</a></td>
                <td>Minuman</td>
                <td>Rp 15.000</td>
                <td>Tersedia (12)</td>
            </tr>
            <tr>
                <td><a href="#">Roti Cokelat</a></td>
                <td>Makanan</td>
                <td>Rp 8.000</td>
                <td>Habis</td>
            </tr>
            <tr>
                <td><a href="#">Teh Kotak</a></td>
                <td>Minuman</td>
                <td>Rp 5.000</td>
                <td>Habis</td>
            </tr>
            <tr>
                <td><a href="#">Keripik Pisang</a></td>
                <td>Makanan</td>
                <td>Rp 10.000</td>
                <td>Tersedia (25)</td>
            </tr>
            <tr>
                <td><a href="#">Air Mineral</a></td>
                <td>Minuman</td>
                <td>Rp 3.500</td>
                <td>Tersedia (40)</td>
            </tr>
        </tbody>
    </table>

</body>
</html>