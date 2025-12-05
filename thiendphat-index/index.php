<?php
require_once __DIR__ . '/inc/functions.php';
$products = load_json(__DIR__ . '/data/products.json');
$pageTitle = 'Thiên Phát - Trang chủ';
include __DIR__ . '/inc/header.php';
?>

  <section class="hero">
    <div class="container">
      <h1>Thiên Phát - Vật liệu xây dựng chất lượng</h1>
      <p>Cung cấp xi măng, gạch, sắt thép và vật liệu hoàn thiện cho công trình của bạn.</p>
      <a class="btn" href="#products">Xem sản phẩm</a>
    </div>
  </section>

  <section id="products" class="container products">
    <h2>Sản phẩm tiêu biểu</h2>
    <div class="grid">
      <?php foreach($products as $p): ?>
        <article class="card">
          <?php if (!empty($p['image'])): ?>
            <a href="product.php?id=<?php echo e($p['id']) ?>">
              <img src="<?php echo e($p['image']) ?>" alt="<?php echo e($p['name']) ?>" onerror="this.style.display='none'">
            </a>
          <?php endif; ?>
          <h3><a href="product.php?id=<?php echo e($p['id']) ?>"><?php echo e($p['name']) ?></a></h3>
          <p><?php echo e($p['short']) ?></p>
          <p class="price"><?php echo e($p['price']) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="about" class="container about">
    <h2>Về chúng tôi</h2>
    <p>Thiên Phát cung cấp vật liệu xây dựng với cam kết chất lượng, giao hàng đúng hẹn và giá cả cạnh tranh. Chúng tôi phục vụ các nhà thầu, công ty xây dựng và khách hàng tư nhân.</p>
  </section>

  <section id="contact" class="container contact">
    <h2>Liên hệ</h2>
    <p>Email: <a href="mailto:info@thienphat.example">info@thienphat.example</a> • Điện thoại: 0123 456 789</p>
  </section>

<?php include __DIR__ . '/inc/footer.php'; ?>
