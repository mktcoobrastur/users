<?php
    if(isset($_POST['user'])) {    
        $user = $_POST['user'];
    }
    require "../televenda/conn.php";

    if(isset($_POST['submit'])) {
        $consulta       = mysqli_query($con, "SELECT id, nome FROM atendentes", mysqli_connect_error($err));
        $l              = mysqli_fetch_array($consulta);
        echo $l['qnt_vendas'];
        echo $user;
    } else { $errors; }

    if(isset($_POST['submitCad'])) {

        function arraymetas($id) {
            $metageral->getBounds($c2);
            return $array;
        }

        $metageral      = 300;
        $weeks          = 5;
        $uteis          = 18;
        $consulta       = mysqli_query($con, "SELECT id, nome, qnt_vendas FROM atendentes", mysqli_connect_error($err));
        $l              = mysqli_fetch_array($consulta);
        $qntVendas      = $l['qnt_vendas'];

        $qntFinal       = $qntVendas + 1;
        $c1             = $metageral / $weeks;
        $c2             = $metageral / $uteis;
        $c3             = $c1 + $c2;
        $qfinal         = $metageral->arraymetas($c3);

        mysqli_query      ($con, "UPDATE atendentes SET qnt_vendas* sum(indice.qnt_vendas) = $c2 WHERE id = $user");
        $sql            = "SELECT * FROM atendentes where qnt_vendas >= $c1";
        $c              = mysqli_query($con, $sql, mysqli_connect_error($err));
        
        //isset($metageral);
        var_dump($l);

    } else { $errors; }

    if(isset($_POST['passaId'])) {
        $id = $_POST['passaId'];
        return $array;
    } else { $errors; }

    if(isset($_GET['get'])) {

        $get = $_GET['get'];
 
        function renderiza($data) {
            $dados     = getComputedParam($get).getComputedParam($idF);
            $data      = $this->json_encode($dados);
            return $data;
        }

        $idF = $c->with($data, $id, $get)
                 ->where('representante','=','televenda')
                 ->renderiza($data)
                 ->first();
                 $dados[]   = array_map('utf8_encode', $c);
    } else { $errors; }
?>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <title>Coobrastur</title>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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
<script type="text/javascript">
new Vue({
  el: '#outForm',
  data: {
    url: 'dados.json',
    data: dados[$i]
  },
  methods: {
    shuffle: function () {
      this.dados[$i] = _.shuffle(this.dados[$i])
    }
  }
})
</script>
</body>
</html>