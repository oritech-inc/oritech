<div class="auth-form w-100 m-auto text-center" hidden="hidden">
    <form class="bg-light p-2 rounded-4" method="post" id="auth-form" data-form="login">
        <input type="hidden" id="form-type" value="login">
        <img src="assets/images/app/logo/logo.png" alt="logo image" width="232" height="197">
        <h1 class="h3 mb-3 fw-bold title text-primary">Welcome back!</h1>
        <div class="row g-2">
            <div class="input-group col-md input-group-sm has-validation mb-3" id="grp-email" hidden="hidden">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-sm" id="tx-email" name="tx-email"
                        placeholder="email" required>
                    <label for="tx-email">Email *</label>
                </div>
            </div>
            <div class="input-group col-md has-validation mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-sm" id="tx-user" name="tx-user"
                        placeholder="Username or email" required>
                    <label for="tx-user" id="">Username or Email *</label>
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="input-group col-md has-validation mb-3">
                <div class="form-floating">
                    <input type="password" class="form-control form-control-sm password" id="tx-password" name="tx-password"
                        placeholder="Password" required>
                    <label for="floatingPassword">Password *</label>
                </div>
                <button type="button" class="btn btn-dark border-left btn-show-pass" data-state="hidden"
                    style="background-color: #646b72">
                    <i class="bi bi-eye-fill fa-1x"></i>
                </button>
            </div>
            <div class="input-group col-md has-validation" id="grp-pass" hidden='hidden'>
                <div class="form-floating">
                    <input type="password" class="form-control form-control-sm password" id="tx-repassword" name="tx-repassword"
                        placeholder="Retype Password" required>
                    <label for="floatingPassword">Retype Password *</label>
                </div>
            </div>
        </div>



        <!-- <div class="form-check text-start my-3" id="rem">
            <input class="form-check-input" type="checkbox" value="remember-me" id="ch-remember">
            <label class="form-check-label" for="ch-remember">
                Remember me
            </label>
        </div> -->
        <div class="d-flex py-3">
            <div class="me-auto pt-2">
                <span id="msg-feed" class="col- fs-6 text-dark pt-2">
                    All fields are required
                </span>
            </div>
            <button class="btn btn-dark text-center bt-link" id="bt-auth" data-type="login" type="submit"
                style="background-color: #557A72">
                SUBMIT
            </button>
            <div class="p-2 ">
            </div>
        </div>
        <p class="my-2 pt-3 text-body-secondary border-top" id="reg">
            <span id="lb-auth">Not registered yet?</span>
            <a href="#" id="bt-auth-link" class="auth-link" data-link="register">
                Register now
            </a>
        </p>
    </form>
</div>