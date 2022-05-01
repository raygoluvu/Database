<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="icon" href="愛之味.ico">
    <title>Login</title>
</head>


<body>


    <div class="container">
        <div class="container sm">
            <div class="row justify-content-between margin p-5">
                <div class="col-4">
                    <a href="#" style="color: grey;text-decoration:none;  ">
                        小麥時光
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <i class="fa fa-home float-end " style="margin-right: 0.5em; color: grey;">回首頁</i>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-sm">
            <div class="row">

            </div>
            <div class="row justify-content-center">
                <div class="col-5 m-3 alert " role="alert" style="display: none;" id="messege">

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5 border p-3 rounded">
                    <div class="col-2 m-2 mb-3" style="font-weight: bold;">
                        帳密登入
                    </div>
                    <form id="login">
                        <input type="hidden" name="method" value="login"></input>
                        <!-- 輸入帳密 -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="acc" name="acc" placeholder="text">
                            <label for="acc" class="form-label">帳號</label>

                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password">
                            <label for="pwd" class="form-label">密碼</label>
                        </div>

                        <div class="row justify-content-between p-2">
                            <div class="col-3 form-check col-3">
                                <input type="checkbox" class="form-check-input" id="check">
                                <label class="form-check-label" for="check">記住帳號</label>
                            </div>
                            <a class="col-3 align-self-end" href="./register.php">註冊新帳號</a>
                        </div>
                        <button type="button" class="btn col-12" id="submit" style="background-color:#ff4e00;color: white">登入</button>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>

<script>
    $("#submit").on("click", function() {
        var mes = $("#messege");
        $.ajax({
            type: "POST",
            url: "./login_access.php",
            data: $("#login").serialize(),
            success: function(status) {
                mes.removeClass().addClass(['col-5', 'm-3', 'alert'])
                if (status == 0) {
                    mes.css("display", "block");
                    mes.addClass(['alert-warning']).html("密碼錯誤");
                }
                if (status == 1) {
                    mes.css("display", "none");
                    window.location.href = "#";
                }
                if (status == -1) {
                    mes.css("display", "block");
                    mes.addClass("alert-danger").html("查無此帳號");
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        })
    })
</script>