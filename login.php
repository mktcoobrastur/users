<?php
    $user = $_POST['user'];
    require "../televenda/conn.php";

    if(isset($_POST['submit'])) {
        $consulta = mysqli_query($con, "SELECT * FROM atendentes Where id = '$user'");
        $l = mysqli_fetch_array($consulta);
        echo $l['qnt_vendas'];
        echo $user;
    } else { $errors; }

    if(isset($_POST['submitCad'])) {
        $consulta = mysqli_query($con, "SELECT * FROM atendentes Where id = '$user'");
        $l = mysqli_fetch_array($consulta);
        $qntVendas = $l['qnt_vendas'];
        $qntFinal = $qntVendas + 1;
        mysqli_query($con, "UPDATE atendentes SET qnt_vendas = $user WHERE id = $user");
        $sql =  "SELECT * FROM atendentes where qnt_vendas >= 20";
        $c = mysqli_query($con, $sql);
        print_r($c);
    } else { $errors; }

    if(isset($_POST['passaId'])) {
        $id = $_POST['passaId'];
        return $id;
    } else { $errors; }

    if(isset($_POST['get'])) {
        $idF =  $this->with($data, $idG)->where('representante','=','televenda')->first($id);
    } else { $errors; }

?>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <title>Coobrastur</title>
</head>
<body>
<form action="login.php<?php $PHP_SELF; ?>" method="post">
    <div class="form-control outForm">
        <input type="hidden" name="get" value="0" />
        <input type="hidden" name="user" value="<?php echo $user; ?>">
        <select name="plano" class="campo">
            <option>Escolha um Plano</option>
            <option value="0">MASTER</option>
            <option value="1">VIP</option>
            <option value="2">GOLD MASTER</option>
        </select>
        <input type="text" name="get" class="form-control" placeholder="<?php echo $_GET['data']; ?>" data="<?php echo $id; ?>">
        <input type="submit" name="submitCad" value="Lançar">
    </div>
</form>

                <?php
                    require "../televenda/conn.php";
                    $consulta2 = mysqli_query($con, "SELECT id, qnt_vendas FROM atendentes WHERE qnt_vendas >= metageral");
                    while ($l = mysqli_fetch_array($consulta2)) {
                            echo $l['nome'].' - ';
                    }
                    print_r($l);
                ?>

</body>
</html>