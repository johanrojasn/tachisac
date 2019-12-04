
<?php
require('Menu.php');
?>
<?php
require('../Componentes/TablaPedidos.php');
?>

<footer>
    <?php
       require('Creditos.php');
    ?>
</footer>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla').load('../Componentes/TablaPedidos.php');
    });
</script>


</body>
</html>
