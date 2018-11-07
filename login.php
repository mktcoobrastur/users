<?php
if(isset($_POST['submit'])) {
    $user   = $_POST['user'];

    require "../televenda/conn.php";
    $consulta = mysqli_query($con, "SELECT * FROM atendentes Where id = '$user'");
    $l = mysqli_fetch_array($consulta);
    echo $l['qnt_vendas'];
    
}
?>

<form action="" method="post">
    <div class="form-control">
        <select name="user" class="campo">
            <option>Escolha um Plano</option>
            <option value="0">MASTER</option>
            <option value="1">VIP</option>
            <option value="2">GOLD MASTER</option>
        </select>
    </div>
</form>