<?php
require_once __DIR__ . '/inc/functions.php';
$products = load_json(__DIR__ . '/data/products.json');
$id = isset($_GET['id']) ? $_GET['id'] : null;
$product = $id ? find_product($products, $id) : null;
if (!$product) {
    $pageTitle = 'Sản phẩm không tìm thấy';
} else {
    $pageTitle = $product['name'];
}
include __DIR__ . '/inc/header.php';
?>

<div class="container">
<?php if (!$product): ?>
  <h2>Sản phẩm không tìm thấy</h2>
  <p>Quay lại <a href="index.php">trang chủ</a>.</p>
<?php else: ?>
  <div class="product-detail">
    <h2><?php echo e($product['name']) ?></h2>
    <?php if (!empty($product['image'])): ?>
      <img src="<?php echo e($product['image']) ?>" alt="<?php echo e($product['name']) ?>" style="max-width:420px;width:100%;display:block;margin-bottom:1rem;" onerror="this.style.display='none'">
    <?php endif; ?>
    <p><?php echo e($product['description']) ?></p>
    <p class="price"><?php echo e($product['price']) ?></p>
    <p><a class="btn" href="contact.php?product=<?php echo urlencode($product['name']) ?>">Yêu cầu báo giá</a></p>
  </div>
<?php endif; ?>
</div>

<?php include __DIR__ . '/inc/footer.php'; ?>
