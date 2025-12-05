<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="icon" type="image/png" href="./img/favicon.png" />
    <style>
      * {
        box-sizing: border-box;
      }
      :root {
        --primary-color: #07a5fe;
        --second-color: #666;
      }
      a {
        text-decoration: none;
      }
      body {
        font-family: "Roboto", sans-serif;
        background-color: #f7f7fa;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
      }
      .sigup {
        display: flex;
        justify-content: center;
        /* padding: 30px 0px; */
      }
      .container-sigup {
        display: flex;
        width: 90%;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        justify-self: start;
      }
      .img-sigup {
        max-height: 80vh;
        width: 50%;
        display: flex;
        overflow: hidden;
        position: relative;
      }
      .img-sigup img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
      }
      .form-sigup-section {
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
        flex-wrap: nowrap;
      }
      .form-sigup-section form {
        width: 100%;
        max-width: 300px;
      }
      .img-logo {
        margin-bottom: 20px;
        width: 100%;
        display: flex;
        justify-content: center;
      }
      .img-logo img {
        width: 100px;
        height: auto;
        margin-bottom: 0;
      }
      .input-group1 {
        margin-bottom: 15px;
        width: 100%;
      }
      .input-group1 label {
        display: block;
        font-weight: 500;
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
      }
      .input-sigup {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px 12px;
        background-color: #fff;
      }
      .input-sigup i {
        color: #888;
        margin-right: 10px;
      }
      .input-sigup input {
        flex-grow: 1;
        border: none;
        outline: none;
        font-size: 16px;
      }
      .toggle-eye {
        cursor: pointer;
        color: #888;
        margin-left: 10px;
      }
      .signup-button {
        width: 100%;
        padding: 12px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 20px;
      }
      .signup-button:hover {
        filter: brightness(110%);
      }
      .login-link {
        text-align: center;
        margin-top: 20px;
        font-size: 15px;
        color: #666;
        width: 100%;
        max-width: 300px;
        margin-left: auto;
        margin-right: auto;
      }

      .login-link a {
        color: var(--primary-color);
        font-weight: bold;
      }
      .login-link a:hover {
        text-decoration: underline;
      }
    </style>
    <title>Đăng ký</title>
  </head>
  <body>
    <div class="sigup">
      <div class="container-sigup">
        <div class="img-sigup">
          <img src="./assets/img/imgsigup.jpg" alt="Nội thất sảnh chờ" />
        </div>
        <div class="form-section form-sigup-section">
          <div class="img-logo">
            <img src="./assets/img/logo.png" alt="" />
          </div>
          <form action="">
            <div class="input-group1">
              <label for="email">Họ và Tên</label>
              <div class="input-sigup">
                <input
                  id="name"
                  type="text"
                  placeholder="Nhập họ và tên của bạn"
                  required
                />
              </div>
            </div>
            <div class="input-group1">
              <label for="email">Email</label>
              <div class="input-sigup">
                <input
                  id="name"
                  type="text"
                  placeholder="example@mail.com"
                  required
                />
              </div>
            </div>
            <div class="input-group1">
              <label for="password">Mật khẩu</label>
              <div class="input-sigup">
                <input
                  id="name"
                  type="text"
                  placeholder="Nhập mật khẩu của bạn"
                  required
                />
                <span class="toggle-eye"
                  ><i class="fas fa-eye-slash toggle-password"></i
                ></span>
              </div>
            </div>
            <div class="input-group1">
              <label for="confirm-password">Xác nhận Mật khẩu</label>
              <div class="input-sigup">
                <input
                  id="name"
                  type="text"
                  placeholder="Nhập lại mật khẩu của bạn"
                  required
                />
                <span class="toggle-eye"
                  ><i class="fas fa-eye-slash toggle-password"></i
                ></span>
              </div>
            </div>
            <button type="submit" class="signup-button">Đăng Ký</button>
          </form>
          <div class="login-link">
            Đã có tài khoản? <a href="./dangNhap.php">Đăng nhập</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
