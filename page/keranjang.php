<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['hapus'])) {

    $index = $_GET['hapus'];

    unset($_SESSION['cart'][$index]);

    $_SESSION['cart'] = array_values($_SESSION['cart']);

    header("Location: keranjang.php");
}

$total = 0;
?>

<link rel="stylesheet" href="css/keranjang.css">

<div class="container-cart">

<h1>Keranjang Belanja</h1>

<?php if(count($_SESSION['cart']) > 0) { ?>

<?php foreach($_SESSION['cart'] as $index => $item) {

$subtotal = $item['harga'] * $item['qty'];

$total += $subtotal;

?>

<div class="cart-item">

    <img src="<?php echo $item['gambar']; ?>">

    <div class="cart-info">

        <h2><?php echo $item['nama']; ?></h2>

        <p class="harga">
            Rp <?php echo number_format($item['harga']); ?>
        </p>

        <p>Size : <?php echo $item['size']; ?></p>

        <p>Quantity : <?php echo $item['qty']; ?></p>

        <p class="subtotal">
            Subtotal :
            Rp <?php echo number_format($subtotal); ?>
        </p>

    </div>

    <a class="hapus-btn"
    href="keranjang.php?hapus=<?php echo $index; ?>">
    Hapus
    </a>

</div>

<?php } ?>

<div class="total">
    Total :
    Rp <?php echo number_format($total); ?>
</div>

<button class="checkout-btn">
    Checkout
</button>

<?php } else { ?>

<div class="kosong">
    Keranjang Masih Kosong
</div>

<?php } ?>

</div>