<?php
    $user   = $_POST['user'];
    require "../televenda/conn.php";

    if(isset($_POST['submit'])) {
        $consulta = mysqli_query($con, "SELECT * FROM atendentes Where id = '$user'");
        $l = mysqli_fetch_array($consulta);
        echo $l['qnt_vendas'];
        echo $user;
    }
    if(isset($_POST['submitCad'])) {
        $consulta = mysqli_query($con, "SELECT * FROM atendentes Where id = '$user'");
        $l = mysqli_fetch_array($consulta);
        $qntVendas = $l['qnt_vendas'];
        $qntFinal = $qntVendas + 1;
        mysqli_query($con, "UPDATE atendentes SET qnt_vendas = $qntFinal WHERE id = $user");
        echo $user;
    }
?>

<form action="login.php" method="post">
    <div class="form-control">
        <input type="hidden" name="user" value="<?php echo $user; ?>">
        <select name="plano" class="campo">
            <option>Escolha um Plano</option>
            <option value="0">MASTER</option>
            <option value="1">VIP</option>
            <option value="2">GOLD MASTER</option>
        </select>
        <input type="submit" name="submitCad" value="Lançar">
    </div>
</form>