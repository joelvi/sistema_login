<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    h1{text-align:center;
      }
      table{
        width: 25%;
        background-color: #FFC;
        border: 2px dotted #F00;
        margin:auto;}

        .izq{text-align: left;
        }
        .der{
          text-align: left;
        }

        td{
          text-align: center;
          padding: 10px;
        }
        </style>
  </head>
  <body>
    <?php require 'partials/header.php' ?>
    <h1> INTRODUCE TUS DATOS</h1>
    <form action="comprueba_login.php" method="post">
      <table>
        <tr>
          <td class="izq">
            Login:</td><td class="der"><input type="text" name="login"></td></tr>
            <tr><td class="izq">password:</td><td class="der"><input type="password" name="password"></td></tr>
            <tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr></table>
  </body>
</html>
