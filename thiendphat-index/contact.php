<?php
require_once __DIR__ . '/inc/functions.php';
$pageTitle = 'Liên hệ - Thiên Phát';
include __DIR__ . '/inc/header.php';

$dataFile = __DIR__ . '/data/contacts.json';
$saved = false;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim(@$_POST['name']);
    $email = trim(@$_POST['email']);
    $phone = trim(@$_POST['phone']);
    $message = trim(@$_POST['message']);
    $product = trim(@$_POST['product']);

    if ($name === '') $errors[] = 'Vui lòng nhập tên.';
    if ($email === '' && $phone === '') $errors[] = 'Vui lòng nhập email hoặc số điện thoại.';

    if (empty($errors)){
        $contacts = load_json($dataFile);
        $contacts[] = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'product' => $product,
            'message' => $message,
            'created_at' => date('c')
        ];
        save_json($dataFile, $contacts);
        $saved = true;
    }
}
?>

<div class="container contact-form">
  <h2>Liên hệ / Yêu cầu báo giá</h2>

  <?php if ($saved): ?>
    <div class="notice">Cảm ơn bạn! Yêu cầu đã được gửi. Chúng tôi sẽ liên hệ sớm.</div>
  <?php endif; ?>

  <?php if (!empty($errors)): ?>
    <div class="errors">
      <ul>
      <?php foreach($errors as $err) echo '<li>'.e($err).'</li>'; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form method="post">
    <label>Họ và tên<br>
      <input type="text" name="name" value="<?php echo e(@$_POST['name'] ?: '') ?>">
    </label>
    <label>Email<br>
      <input type="email" name="email" value="<?php echo e(@$_POST['email'] ?: '') ?>">
    </label>
    <label>Điện thoại<br>
      <input type="text" name="phone" value="<?php echo e(@$_POST['phone'] ?: '') ?>">
    </label>
    <label>Sản phẩm (nếu có)<br>
      <input type="text" name="product" value="<?php echo e(@$_GET['product'] ?: @$_POST['product'] ?: '') ?>">
    </label>
    <label>Nội dung<br>
      <textarea name="message" rows="5"><?php echo e(@$_POST['message'] ?: '') ?></textarea>
    </label>
    <p><button class="btn" type="submit">Gửi</button></p>
  </form>

  <h3>Địa chỉ</h3>
  <p>Email: <a href="mailto:info@thienphat.example">info@thienphat.example</a></p>
  <p>Điện thoại: 0123 456 789</p>
</div>

<?php include __DIR__ . '/inc/footer.php'; ?>
