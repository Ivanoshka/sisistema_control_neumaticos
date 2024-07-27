

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!--     bootstrap
 -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


     <!--    CSS -->
     <style>
        .login{
            margin-left: 10%;
            margin-top: 10%;
            margin-right: 15%;
        }
        .header{
            margin-top: 5%;
            background-color: aquamarine;
            text-align: center;
        }
        body{
            background-color: honeydew;
        }
     </style>

</head>
<body class="">

        <div class="header">
            <h1>LOGIN</h1>
        </div>
<!-- LOGIN
 -->
<form class="login">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Clave de administrador</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Ingresa la clave de usuario del administrador.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No soy un robot</label>
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</body>
</html>