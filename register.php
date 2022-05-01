<?php

include("./config.php");

?>
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
    <title>Document</title>
</head>

<style>
    .accordion-button {
        color: #8ea604;
        font-weight: bolder;
    }

    #register {
        color: #7A7A7A;
    }
</style>


<body>

    <div class="container-fluid">
        <div class="container sm">
            <div class="row justify-content-between margin p-4">
                <div class="col-4">
                    <a href="#" style="color: grey;text-decoration:none;">
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

        <div class="row justify-content-center">

            <div class="row justify-content-center" style="font-size:larger;">
                <div class="col-auto align-self-center my-5 alert alert-info" role="alert" style="font-weight: bold;font-size: 50px;background-color:#7A7A7A;color:white;">
                    請填寫註冊資料
                </div>
                <div class="col-10 border p-3 rounded justify-content-cneter">
                    <!-- 表單 -->
                    <div class="accordion" id="accordionExample">
                        <!-- Block 1 -->
                        <!-- 隱藏警告資訊 -->
                        <div class="row justify-content-center">
                            <div class="col-5 m-3 alert " role="alert" style="display: none;" id="messege">
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    登入資料
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <!-- 登入資料 -->
                                <div class="accordion-body p-5">
                                    <form id="register">
                                        <div class="form-floating mb-3" id="unbox">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="text">
                                            <label for="username" class="form-label">使用者名稱</label>
                                        </div>

                                        <div class="form-floating mb-3" id="accbox">
                                            <input type="text" class="form-control" id="acc" name="acc" placeholder="text">
                                            <label for="acc" class="form-label">帳號</label>
                                        </div>

                                        <div class="form-floating mb-3" id="pwdbox">
                                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password">
                                            <label for="pwd" class="form-label">密碼</label>

                                        </div>

                                        <div class="form-floating mb-3" id="pwd_checkbox">
                                            <input type="password" class="form-control" id="pwd_check" name="pwd_check" placeholder="password">
                                            <label for="pwd_check" class="form-label">確認密碼</label>
                                        </div>
                                        <button type="button" class="btn col-12" id="next" style="background-color:#ff4e00;color: white">下一步</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Block 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" disabled="disabled" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    個人資料
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-5">
                                    <form class="" id="info">
                                        <div class="form-floating mb-3" id="namebox">
                                            <input type="text" class="form-control" id="realname" name="realname" placeholder="text">
                                            <label for="realname" class="form-label">真實姓名</label>
                                        </div>
                                        <div class="form-floating mb-3" id="phonebox">
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="text">
                                            <label for="phone" class="form-label">電話號碼</label>
                                        </div>
                                        <div class="form-floating mb-3" id="IDbox">
                                            <input type="text" class="form-control" id="pid" name="pid" placeholder="text">
                                            <label for="pid" class="form-label">身分證</label>
                                        </div>
                                        <div class="form-floating mb-3" id="mailbox">
                                            <input type="email" class="form-control" id="mail" name="mail" placeholder="text">
                                            <label for="mail" class="form-label">E-mail</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>


<script>
    $(document).ready(function() {
        $("#username").on("click", function() {
            $(".hint_text").remove();
            $("#unbox").append("<span class='form-text mx-2 hint_text'>請輸入10字元內的字母、數字組合</span>");
        })
        $("#acc").on("click", function() {
            $(".hint_text").remove();
            $("#accbox").append("<span class='form-text mx-2 hint_text'>請輸入10字元內的字母、數字組合</span>");
        })
        $("#pwd").on("click", function() {
            $(".hint_text").remove();
            $("#pwdbox").append("<span class='form-text mx-2 hint_text'>請輸入20字元內的字母、數字組合</span>");
        })
    })

    $("#username").keyup(function() {
        var uname = $("#username")
        $.ajax({
            url: "./check_uname.php",
            type: "POST",
            data: uname,
            success: function(status) {
                if (status == 1) {
                    $(".hint_text").remove();
                    $("#unbox").append("<span class='form-text mx-2 hint_text' style='color:red';'>使用者名稱重複，請重新輸入</span>");
                }
                if (status == 0) {
                    $(".hint_text").remove();
                    $("#unbox").append("<span class='form-text mx-2 hint_text' style='color:green';>使用者名稱未重複</span>");
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        })
    })
    $("#acc").keyup(function() {
        var acc = $("#acc")
        $.ajax({
            url: "./check_acc.php",
            type: "POST",
            data: acc,
            success: function(status) {
                if (status == 1) {
                    $(".hint_text").remove();
                    $("#accbox").append("<span class='form-text mx-2 hint_text' style='color:red;'>帳號已使用，請重新輸入</span>");
                }
                if (status == 0) {
                    $(".hint_text").remove();
                    $("#accbox").append("<span class='form-text mx-2 hint_text' style='color:green;'>帳號可使用</span>");
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        })
    })


    $("#pwd_check").keyup(function() {
        var p1 = $("#pwd");
        var p2 = $("#pwd_check");
        if (p1.val() != p2.val()) {
            $(".hint_text").remove();
            $("#pwd_checkbox").append("<span class='form-text mx-2 hint_text' style='color:red;'>與原先密碼不符，請重新輸入</span>");
        } else {
            $(".hint_text").remove();
        }
    })


    $("#next").on("click", function() {
        var mes = $("#messege");
        $.ajax({
            url: "./check_final.php",
            type: "POST",
            data: $("#register").serialize(),
            success: function(status) {
                if (status == 1) {
                    $("#collapseTwo").addClass("show");
                } else {
                    mes.css("display", "block");
                    mes.addClass("alert-danger").html("帳號創建失敗，請再次嘗試");
                }
            }
        })
    })
    // $("#submit").on("click", function() {
    //     var acc = $("#acc")
    //     var pwd = $("#pwd")
    //     var pwd_check = $("$pwd_check")
    //     $.ajax({
    //         url: "./register_process.php",
    //         type: "POST",
    //         data: ""
    //     })
    // })
</script>