<?php include '../header.php'; ?>
<div id="login">
    <h3 class="text-center pt-5">Login form</h3>
    <div class="container">
        <div  class="row justify-content-center ">
            <form class="col-md-5" id="login-row">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="row">
                <div class="mb-3 form-check col-6">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <div class="mb-3 col-6">
                   <a class="float-end" href="/signup">Register Now</a>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include '../footer.php'; ?>