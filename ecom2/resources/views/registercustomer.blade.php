<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/loginregstyle.css">

</head>
<body>
<main id="main-area">
<!-- registration area -->
<section id="register">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Customer Register</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                <span class="font-ubuntu text-black-50">I already have <a href="login">Login</a></span>
            </div>
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- #registration area -->
                    <!-- <div class="upload-profile-image d-flex justify-content-center pb-5 mt-4" id="customer-pro-img">

                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <img class="camera-icon" src="/images/loginreg/camera-solid.svg" alt="camera">
                            </div>
                            <img src="/images/loginreg/profile/beard.png" style="width: 200px; height: 200px"
                                class="img rounded-circle" alt="profile">
                            <small class="form-text text-black-50">Choose Image</small>
                            <input type="file" form="reg-form" class="form-control-file" name="profileUpload-1"
                                id="upload-profile">
                        </div>
                    </div> -->
                    <div class="d-flex justify-content-center">

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                        <form action="{{ url('/customer') }}" method="post" enctype="multipart/form-data" id="reg-form">

                        {{ csrf_field() }}
                        
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['firstName'])) {
    echo $_POST['firstName'];
}
?>" required name="firstName" id="firstName" class="form-control" placeholder="First Name">

                                </div>

                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['LastName'])) {
    echo $_POST['LastName'];
}
?>" required name="LastName" id="LastName" class="form-control" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['PhoneNumber'])) {
    echo $_POST['PhoneNumber'];
}
?>" required name="PhoneNumber" id="PhoneNumber" class="form-control" placeholder="Phone Number">

                                </div>
                            </div>


                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['Address'])) {
    echo $_POST['Address'];
}
?>" required name="Address" id="Address" class="form-control" placeholder="Address">

                                </div>
                            </div>


                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="text" value="<?php if (isset($_POST['NIC'])) {
    echo $_POST['NIC'];
}
?>" required name="NIC" id="NIC" class="form-control" placeholder="NIC">

                                </div>
                            </div>


                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="email" value="<?php if (isset($_POST['email'])) {
    echo $_POST['email'];
}
?>" required name="email" id="email" class="form-control" placeholder="Email*">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="password" required name="password" id="password" class="form-control"
                                        placeholder="password*">
                                </div>
                            </div>

                            <div class="form-row my-4">
                                <div class="col">
                                    <input type="password" required name="confirm_pwd" id="confirm_pwd"
                                        class="form-control" placeholder="Confirm Password*">
                                    <small id="confirm_error" class="text-danger"></small>
                                </div>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="agreement" class="form-check-input" required>
                                <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a
                                        href="#">term, conditions, and policy </a>(*) </label>
                            </div>

                            <div class="submit-btn text-center my-5">
                                <button type="submit"
                                    class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                            </div>


                        </form>
                    </div>
        </div>
    </div>
</section>
<!-- #registration area -->

<script>
$(function() {
    $('#myTab li:last-child a').tab('show')
})
</script>




</main>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/loginregmain.js"></script>


<script src="js/loginregdropdown.js"></script>




</body>
</html>
