<?php include '../header.php'; ?>
<style>
    body {
        background-color: #E7E7E7;
    }
</style>

<div class="container mt-3">
    <div class="row justify-content-center ">
        <form action="/process.php" method="get"  class="col-md-5 bg-white p-5" id="login-row">

            <h3 class="text-center">SIGNUP</h3>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="pass">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass1">
            </div>

            <button type="submit" name="signup" value="signup" class="btn btn-primary" id="signup">Submit</button>
        </form>
    </div>
</div>
</div>
<script>

</script>


<?php include '../footer.php'; ?>