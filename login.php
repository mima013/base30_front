        <?php include "parts/header.php"; ?>

        <div class="account-page">
            <div class="bg-pattern-style bg-pattern-style-register">
                <div class="content">

                    <div class="account-content">
                        <div class="account-box">
                            <div class="login-right">
                                <div class="login-header">
                                    <h3><span>base30</span> Login</h3>
                                    <p class="text-muted">Accès à notre tableau de bord</p>
                                </div>

                                <form action="">

                                    <div class="col-lg-6">
                                        <div class="form-group">

                                            <input id="first-name" type="text" class="form-control" name="first_name" autofocus="" placeholder="username">
                                        </div>
                                    </div>


                                    <div class="form-group">

                                        <input id="nom" type="email" class="form-control" placeholder="your email adress">
                                    </div>
                                    <div >
                                        <div >
                                            <div class="form-group">

                                                <input id="password" type="password" class="form-control" name="password" placeholder="mot de passe">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-end">
                                        <a class="forgot-link" href="forgot-password.html">mot de passe oublier ?</a>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary login-btn" type="submit">Connexion</button>
                                    <div class="account-footer text-center mt-3">
                                        <div class="text-center dont-have">pas encore de compte ? <a href="register.php"> S'enregistrer</a></div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php include "parts/footer.php"; ?>