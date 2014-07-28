<form class="form-horizontal" role="form" action="index.php/user/login" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">UserName</label>
    <div class="col-sm-10">
        <input type="username" class="form-control" id="inputEmail3" placeholder="UserName" name="username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
            <input type="checkbox" name="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">登录</button>
      <a href="http://10.241.226.31/tucao/index.php/user/register"><button type="button" class="btn btn-default">注册</button></a>
    </div>
  </div>
</form>

