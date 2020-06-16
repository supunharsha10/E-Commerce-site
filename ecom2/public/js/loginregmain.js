$(document).ready(function(e) {

    $("input[name='profileUpload-1']").click(function() {
        let $uploadfile = $('#register #customer-pro-img input[type="file"]');
        $uploadfile.change(function() {
            readURL(this);
        });



        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {

                    $("#register #customer-pro-img .img").attr('src', e.target.result);
                    $("#register #customer-pro-img .camera-icon").css({ display: "none" });

                }

                reader.readAsDataURL(input.files[0]);

            }
        }

    });






    $("#reg-form").submit(function(event) {
        let $password = $("#password");
        let $confirm = $("#confirm_pwd");
        let $error = $("#confirm_error");
        if ($password.val() === $confirm.val()) {
            return true;
        } else {
            $error.text("Password not Match");
            event.preventDefault();
        }
    });







});