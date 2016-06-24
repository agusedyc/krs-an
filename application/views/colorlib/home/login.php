<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <?php $atrib = array('id' => 'login', 'class' => 'form-vertical form-label-left'); ?>
            <?= form_open_multipart($this->uri->segment(1).'/verify',$atrib); ?>
                <h1>Login Form</h1>
                <div>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                </div>
                <div>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                    <button class="btn btn-default submit" type="submit">Log in</button>
                    <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <!-- <p class="change_link">New to site?
                        <a href="#signup" class="to_register"> Create Account </a>
                    </p> -->
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h1><i class="fa fa-check"></i> Krs-An</h1>
                        <p>©2016 <a href="http://agusedyc.github.io/">Agus Edy Cahyono</a> Theme By :  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> is a <a href="http://getbootstrap.com">Bootstrap 3</a> template. Privacy and Terms</p>
                    </div>
                </div>
            <?= form_close(); ?>
        </section>
    </div>
    <div id="register" class="animate form registration_form">
        <section class="login_content">
            <form>
                <h1>Create Account</h1>
                <div>
                    <input type="text" class="form-control" placeholder="Username" required="" />
                </div>
                <div>
                    <input type="email" class="form-control" placeholder="Email" required="" />
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                    <a class="btn btn-default submit" href="index.html">Submit</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="#signin" class="to_register"> Log in </a>
                    </p>
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                        <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
<!-- custom -->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
$(".body").toggleClass('login');
$(".body").removeClass('nav-md');
$("#a").removeClass('container body');
$("#b").removeClass('main_container');
</script>
