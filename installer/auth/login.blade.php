<div class="container-fluid">
  <div class="row">
    <div class="col-lg-offset-3 col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
          {!! BootForm::openHorizontal(['sm' => [4, 8], 'md' => [2, 10]]) !!}
          {!! BootForm::text('Username', 'username') !!}
          {!! BootForm::password('Password', 'password') !!}
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8 col-md-offset-2 col-md-10">
              <input type="submit" value="Login" class="btn btn-primary">
              <a href="{!! route('auth.register') !!}" class="btn btn-link">
                Register
              </a>
            </div>
          </div>
          {!! BootForm::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
