<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://api.binance.com/api/v1/oauth/token");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, "grant_type=password&username=dbfc5b860000a9a0bf648990&password=7337eeb0c626643c1d1cec8a50323c");

$response = curl_exec($curl);

$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script>

    </script>
    <style>
        body label{font-size: 20px;}
        body input{height: 20px;font-size: 20px}
        body input[type="button"],[type="submit"]{height: auto;margin-top: 10px;}
    </style>
</head>
<body style="margin: auto;width: 35%;padding: 10px; ">
<form action="" method="post">
<div class="form-horizontal" style="align-content: center;">
    <div class="form-group;">
        <label class = "control-label col-md-2">BinTransID</label>
        <div class="col-md-10">
            <input type="text" name="TransID" class = "form-control" >
        </div>
    </div>

    <div class="form-group">
        <label class = "control-label col-md-2">BinanceUserID</label>
        <div class="col-md-10">
            <input type="text" name="UserID" class = "form-control" >
        </div>
    </div>

    <div class="form-group">
        <label class = "control-label col-md-2">First Name</label>
        <div class="col-md-10">
            <input type="text" name="first_name" class = "form-control" >
        </div>
    </div>

    <div class="form-group">
        <label class = "control-label col-md-2">Last Name</label>
        <div class="col-md-10">
            <input type="text" name="last_name" class = "form-control" >
        </div>
    </div>

    <div class="form-group">
        <label class = "control-label col-md-2">BankAccName</label>
        <div class="col-md-10">
            <input type="text" name="bankName" class = "form-control">
        </div>
    </div>

    <div class="form-group">
        <label class = "control-label col-md-2">BankAccNum</label>
        <div class="col-md-10">
            <input type="text" name="bankNum" class = "form-control">
        </div>
    </div>

    <div class="form-group">
        <label class = "control-label col-md-2">Random String</label>
        <div class="col-md-10">
            <input type="text" name="randomString" class = "form-control" >
        </div>
    </div>

    <div class="form-group">
        <label class = "control-label col-md-2">Signature</label>
        <div class="col-md-10">
            <input type="text" name="signature" class = "form-control"disabled="true">
        </div>
    </div>

    <div class="form-group">
        <label class = "control-label col-md-2">Token</label>
        <div class="col-md-10">
            <input type="text" name="token" class = "form-control" disabled="true">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="button" name="create" value="Generate" class="btn btn-default" onclick="return x();"/>
            <input type="submit" name="register" value="Register " class="btn btn-default" onclick="return x();"/>
        </div>
    </div>
</div>
</form>
</body>
</html>