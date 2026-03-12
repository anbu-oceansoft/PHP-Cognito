<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .card{
            background:white;
            padding:40px;
            border-radius:10px;
            box-shadow:0 4px 10px rgba(0,0,0,0.2);
            text-align:center;
            width:350px;
        }

        h2{
            margin-bottom:20px;
        }

        button{
            background:#ff9900;
            border:none;
            padding:12px 25px;
            font-size:16px;
            color:white;
            border-radius:6px;
            cursor:pointer;
        }

        button:hover{
            background:#e68a00;
        }

        p{
            color:#555;
        }
    </style>

</head>

<body>

<div class="card">

    <h2>Login with Amazon Cognito</h2>

    <p>Click the button below to authenticate.</p>

    <a href="/login">
        <button>Login</button>
    </a>

</div>

</body>
</html>
