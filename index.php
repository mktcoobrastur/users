<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <title>Coobrastur</title>
        <link rel="stylesheet" href="e.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <img class="logo" src="i/logo-coobrastur.png" />
    <h6 style="text-align: center; color: #999;">Controle Televenda</h6>
    <form action="login.php" method="post">
        <div class="out">
            <select name="user" class="campo">
                <?php
                    require "../televenda/conn.php";
                    $consulta = mysqli_query($con, "SELECT * FROM atendentes");
                
                    while ($l = mysqli_fetch_array($consulta)) {
                ?>
                        <option value="<?php echo $l['id']; ?>"><?php echo $l['nome']; ?></option>
                <?php
                    }
                ?>
            </select>
            <input type="submit" class="campo" value="Entrar" name="submit" />
        </div>
    </form>
</body>
</html>