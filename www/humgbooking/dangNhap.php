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
        margin: 0;
        padding: 0;
      }

      :root {
        --primary-color: #07a5fe;
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
      }
      .login {
        display: flex;
        justify-content: center;
      }
      .container-login {
        display: flex;
        width: 90%;
        /* max-width: 1200px; */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        /* justify-content: center; */
      }

      .img-login {
        width: 50%;
        max-height: 80vh;
        overflow: hidden;
        position: relative;
      }

      .img-login img {
        width: 100%;
        height: 100%;
        display: block;
      }

      .form-login-section {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* padding: 40px; */
      }

      .form-login-section form {
        width: 100%;
        max-width: 400px;
      }

      .login-form-wrapper h2 {
        font-size: 28px;
        margin-bottom: 8px;
        color: #333;
      }

      .subtitle {
        font-size: 16px;
        color: #666;
        margin-bottom: 30px;
      }

      .input-group {
        margin-bottom: 20px;
      }

      .input-group label {
        display: block;
        font-weight: 500;
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
      }

      .input-login {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px 12px;
        background-color: #fff;
      }

      .input-login i {
        color: #888;
        margin-right: 10px;
      }

      .input-login input {
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

      .forgot-password {
        display: block;
        text-align: right;
        font-size: 14px;
        color: var(--primary-color);
        text-decoration: none;
        margin-top: 5px;
      }

      .login-button {
        width: 100%;
        padding: 12px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 30px;
        transition: background-color 0.3s;
      }

      .login-button:hover {
        filter: brightness(110%);
      }

      .sigup-link {
        text-align: center;
        margin-top: 20px;
        font-size: 15px;
        color: #666;
        width: 100%;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
      }

      .sigup-link a {
        color: var(--primary-color);
        font-weight: bold;
      }
      .sigup-link a:hover {
        text-decoration: underline;
      }
    </style>
    <title>Đăng Nhập</title>
  </head>
  <body>
    <div class="login">
      <div class="container-login">
        <div class="img-login">
          <img src="./assets/img/imglogin.jpg" alt="Hình ảnh nội thất" />
        </div>

        <div class="form-section form-login-section">
          <div class="login-form-wrapper">
            <h2>Chào mừng trở lại!</h2>
            <p class="subtitle">
              Truy cập tài khoản của bạn để quản lý đặt phòng.
            </p>
            <form action="">
              <div class="input-group">
                <label for="email">Email hoặc Tên người dùng</label>
                <div class="input-login">
                  <i class="fa-solid fa-user"></i>
                  <input
                    id="email"
                    type="text"
                    placeholder="Nhập email của bạn"
                    required
                  />
                </div>
              </div>
              <div class="input-group">
                <label for="password">Mật khẩu</label>
                <div class="input-login">
                  <i class="fa-solid fa-lock"></i>
                  <input
                    id="password"
                    type="password"
                    placeholder="Nhập mật khẩu của bạn"
                    required
                  />
                  <span class="toggle-eye"
                    ><i class="fa-solid fa-eye-slash"></i
                  ></span>
                </div>
                <a href="#" class="forgot-password">Quên mật khẩu?</a>
              </div>
              <button type="submit" class="login-button">Đăng Nhập</button>
            </form>
            <div class="sigup-link">
              Chưa có tài khoản? <a href="./dangKy.php">Đăng ký ngay</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
