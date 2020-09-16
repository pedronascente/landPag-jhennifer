<div id="loginbox">  
    <div class="row-fluid text-center">
        <div class="span12"> <h1><img src="<?= base_url('assets/img/logo.png'); ?>"></h1></div>
    </div>
    <form  class="form-vertical" action="<?= base_url('admin/auth'); ?>" method="post">
        <div class="control-group normal_text"><h3>Portaria Virtual</h3></div>
        <p class="normal_text"><?php //$MSGVENDEDOR; ?></p>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="usuario"  placeholder="Username"  required="" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="senha" placeholder="Password" required="" />
                </div>
            </div>
        </div>
        <div class="control-group text-center">
            <div class="controls">
                <input type="submit"  class="btn   btn-lg btn-success" value="Efetuar Login" style="padding: 10px 20px" />
            </div>
        </div>
    </form>
</div>
