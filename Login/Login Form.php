<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <title>PPKHA IT Del</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Form.css">
</head>
<body>
<div class="container-fluid" >
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
             <div class="card card-signin my-5">

                <div class="card-body">
                    <div class="text-center">
                        <img id="logo" style="height: 130px; margin-right: 25px; width: 30%" src="1.png" alt="#">
                    </div>
                    <div>&nbsp;</div>
                    <hr >
                    <?php
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "<p style='color: red'>Login gagal! username atau password anda salah!<p style='color: red'>";
                        }else if($_GET['pesan'] == "logout"){
                            echo "<p style='color: green'>Anda telah berhasil logout</p>";
                        }else if($_GET['pesan'] == "belum_login"){
                            echo "<p style='color: red'>Anda harus login untuk mengakses halaman admin</p>";
                        }
                    }
                    ?>
                    <form class="form-signin" id="form" name="myForm" method="post" action="cek_login.php">
                        <p style="font-size: 25px">Username</p>
                        <div class="form-label-group">
                            <input type="text" id="username" name="username" class="form-check-inline" placeholder="Username">
                        </div>
                        <div>&nbsp;</div>

                        <p style="font-size: 25px">Password</p>
                        <div class="form-label-group">
                            <input type="password" id="password" name="password" class="form-check-inline" placeholder="Password">
                        </div>


                                <input style="width: 531px;margin-top: 50px"  id="btn" class="btn text-uppercase" type="submit"
                                       value="masuk"/>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<script>
         $(document).ready(function(){


             $("#form").validate({

                 rules: {
                     username: "required",
                     password: "required",
                 },
                 messages: {
                     username: {
                         required: "<p style='color: red; margin-left: -26px; margin-top: 41px'>Username tidak boleh kosong</p>",
                     },
                     password: {
                         required: "<p style='color: red; margin-left: -26px; margin-top: 41px'>Password tidak boleh kosong</p>",
                     },
                 },
                 submitHandler: function(myForm) {
                     myForm.submit();
                 },
             });
         });


             $("#btn").on("click",function(){

                 const input = $("#username");
                 const input2= $("#password");
                 if(!input.val() || !input2.val()){
                         input.css("border","1px solid red");
                         input2.css("border","1px solid red");

                     $("input").focusout(function() {
                         if($(this).val()=='') {
                             $(this).css('border', 'solid 1px red');
                         }
                         else {
                             $(this).css('border', '')

                         }
                     }) .trigger("focusout");
                 }

             });

</script>
</html>