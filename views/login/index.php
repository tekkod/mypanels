<link rel="stylesheet" href="public/css/login.css">

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="login-box well">
                <form role="form" action="login/run" method="post">
                    <legend>Oturum Aç</legend>
                    <div class="form-group">
                        <input name="login" id="login" placeholder="Kullanıcı Adı" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input name="password" id="password" placeholder="Parola" type="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="Login" />
                    </div>
                </form>

            </div>
        </div>
        <div class='col-md-3'></div>
    </div>
</div>