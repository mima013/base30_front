<?php include "parts/header.php";?>
<div class="account-page">
    <div class="content ">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                             class="img-fluid" alt="image d'enregistrement">
                    </div>
                    <div class=" col-lg-2 col-xl-2 ">
                        <div class="account-content">
                            <div class="account-box">
                                <div class="login-right">
                                    <div class="login-header">
                                        <h3><span>base30</span> Register</h3>
                                        <p class="text-muted">Accès à notre tableau de bord</p>
                                    </div>
                                    <form>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="nom" id="nom" class="form-control" placeholder="fist name" />

                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="nom" id="nom" class="form-control" placeholder="second name"/>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="nom" class="form-control" placeholder="adress mail" />

                                        </div>
                                        <!-- Password input -->
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="nom" id="nom" class="form-control" placeholder="password" />

                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="nom" id="nom" class="form-control" placeholder="confirm password"/>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-control-xs custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="agreeCheckboxUser" id="agree_checkbox_user">
                                                <label class="custom-control-label" for="agree_checkbox_user">I agree the terms and conditions of your policicies.</label>
                                            </div>
                                        </div>
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            s'enregistrer
                                        </button>
                                        <div class="text-center dont-have">
                                            vous avez deja un compte? <a class="forgot-link mb-0" href="login.php">connexion</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include "parts/footer.php";?>