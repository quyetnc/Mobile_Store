
  <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Tạo một tài khoản!</h1>
          </div>
          <form class="user" action="index.php?mod=User&act=signin" method="post">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Tên Khách Hàng" required>
              </div>
              <div class="col-sm-6">
                <input type="text" name="phonenum" class="form-control form-control-user" id="examplephone" placeholder="Số Điện Thoại" required>
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Địa chỉ Email" required>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="address" name="add" class="form-control form-control-user" id="exampleInputPassword" placeholder="Địa Chỉ" required>
              </div>
              
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mật khẩu" required>
              </div>
              <div class="col-sm-6">
                <input type="password" name="cpass" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Lặp lại mật khẩu" required>
              </div>
            </div>
       
            <input type="submit" value="Tạo Tài Khoản" class="btn btn-primary btn-user btn-block"/>
            <hr>
          </form>
          <hr>
          <a href="login.php?mod=Login" class="btn btn-login btn btn-block">
              <i class="glyphicon glyphicon-log-in"></i> Quay lại trang đăng nhập
            </a>
        </div>
      </div>
    </div>
  </div>
</div>