<?php
//include class RindeGastos
include '../config.php';
include_once('../RindeGastos.php'); 

?>
<HTML>
    <HEAD>
        <TITLE>Test getExpense Rindegastos</TITLE>
    </HEAD>
    <BODY>
    <?php
        //List of expenses
        $rgClass = new RindeGastos(TOKEN_ACCS);
        //Example array of parameters
        $params = array();
        $params['Id'] = 650862;
        $expense = $rgClass->getExpense($params);
        print_r($expense);

    ?>
    </BODY>
</HTML>