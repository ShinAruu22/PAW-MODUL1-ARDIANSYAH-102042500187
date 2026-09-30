<?php
$produk = [
    [
        "nama" => "Monitor Xiaomi 27 Inch",
        "kategori" => "Monitor",
        "harga" => 2699000,
        "stok" => 7
    ],
    [
        "nama" => "Redragon M612AK PRO Gaming Mouse",
        "kategori" => "Mouse",
        "harga" => 859000,
        "stok" => 16
    ],
    [
        "nama" => "Rexus Heroic KX4 Gaming Keyboard",
        "kategori" => "Keyboard",
        "harga" => 300000,
        "stok" => 0
    ],
    [
        "nama" => "Noir Solace Deskmat",
        "kategori" => "Aksesoris",
        "harga" => 239000,
        "stok" => 15
    ],
    [
        "nama" => "Headset Gaming Rexus Thundervox HX9",
        "kategori" => "Audio",
        "harga" => 459000,
        "stok" => 8
    ],
    [
        "nama" => "MAONO PD200W Dynamic Microphone",
        "kategori" => "Audio",
        "harga" => 1699000,
        "stok" => 6
    ],
    [
        "nama" => "Logitech G304 Lightspeed Wireless Gaming Mouse",
        "kategori" => "Mouse",
        "harga" => 559000,
        "stok" => 0
    ],
    [
        "nama" => "Press Play ESSENTIAL75 Wireless",
        "kategori" => "Keyboard",
        "harga" => 749000,
        "stok" => 0
    ],
    [
        "nama" => "MSI GAMING MONITOR 24 INCH MAG 245F X24",
        "kategori" => "Monitor",
        "harga" => 1799000,
        "stok" => 4
    ],
];

$total_produk = count($produk);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amphi Store - Katalog Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h2>Amphi Store</h2>
        <nav>
            <a href="#">Home</a>
            <a href="#products">Products</a>
            <a href="#">About</a>
        </nav>
    </header>

    <section class="hero">
        <p>AMPHI STORE</p>
        <h1>PUSAT GAMING TERBAIK DI INDONESIA</h1>
        <p>Tempat berkumpulnya gaming gear dengan kualitas terbaik dan harga paling bersaing!</p>
        <a href="#products" class="btn-hero">Lihat Produk</a>
    </section>

    <main>
        <section id="products">
            <div class="katalog-header">
                <div>
                    <p style="font-size: 0.9rem; font-weight:normal; color:#666;">OUR PRODUCTS</p>
                    <h2>Katalog Produk</h2>
                </div>
                <p class="total-info">Total Produk: <?php echo $total_produk; ?></p>
            </div>

            <div class="product-grid">
                
                <?php foreach($produk as $item): ?>
                    <?php 
                        $is_diskon = $item['harga'] >= 1000000;
                        $harga_akhir = $is_diskon ? ($item['harga'] * 0.9) : $item['harga'];
                        $stok_ada = $item['stok'] > 0;
                    ?>
                    
                    <article class="card">
                        <div class="card-content">
                            <div class="badges-container">
                                <?php if($is_diskon): ?>
                                    <span class="badge diskon">Diskon 10%</span>
                                <?php endif; ?>
                                
                                <span class="badge <?php echo $stok_ada ? 'tersedia' : 'habis'; ?>">
                                    <?php echo $stok_ada ? 'Tersedia' : 'Stok Habis'; ?>
                                </span>
                            </div>
                            
                            <h3><?php echo $item['nama']; ?></h3>
                            <p class="kategori"><?php echo $item['kategori']; ?></p>
                            
                            <div class="harga-area">
                                <?php if($is_diskon): ?>
                                    <p class="harga-coret">Rp<?php echo number_format($item['harga'], 0, ',', '.'); ?></p>
                                <?php endif; ?>
                                <p class="harga-akhir">Rp<?php echo number_format($harga_akhir, 0, ',', '.'); ?></p>
                            </div>
                        </div>
                        
                        <div class="card-action">
                            <p class="stok-info">Stok: <?php echo $item['stok']; ?></p>
                            
                            <button class="<?php echo $stok_ada ? 'beli' : ''; ?>" <?php echo !$stok_ada ? 'disabled' : ''; ?>>
                                <?php echo $stok_ada ? 'Beli Sekarang' : 'Tidak Tersedia'; ?>
                            </button>
                        </div>
                    </article>
                    
                <?php endforeach; ?>

            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Amphi Store. Tugas Praktikum PAW.</p>
    </footer>

</body>
</html>
