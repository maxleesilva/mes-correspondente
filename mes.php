<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Qual o mês do ano</title>
    </head>
    <body>
Exercício: Faça um programa que ao digitar um número de 1 a 12 apareça o mês equivalente.
        <br/><br/><br/>
    </body>

<form action="mes.php" method="get">
    <style>
    div#mesano {
    text-align: center;
	width: 190px;
	background-color: grey;
	box-shadow: 0px 0px 10px black;
	padding: 10px;
    }        
</style>
    <div id="mesano">
        <h4>Escolha um número de 1 a 12 e descubra o mês correspondente:</h4>
        <select name="numero">
            <option value="mes1">1</option>
            <option value="mes2">2</option>
            <option value="mes3">3</option>
            <option value="mes4">4</option>
            <option value="mes5">5</option>
            <option value="mes6">6</option>
            <option value="mes7">7</option>
            <option value="mes8">8</option>
            <option value="mes9">9</option>
            <option value="mes10">10</option>
            <option value="mes11">11</option>
            <option value="mes12">12</option>
        </select>
        
        <input type="submit" value="Ok"/>

<?php
    $mes = @$_REQUEST["numero"];
    print "<br/>";
    print "<h3>";
    if ($mes =="mes1"){
        print "O mês é Janeiro.";
    }elseif ($mes =="mes2"){
        print "O mês é Fevereiro.";
    }elseif ($mes =="mes3"){
        print "O mês é Março.";
    }elseif ($mes =="mes4"){
        print "O mês é Abril.";
    }elseif ($mes =="mes5"){
        print "O mês é Maio.";
    }elseif ($mes =="mes6"){
        print "O mês é Junho.";
    }elseif ($mes =="mes7"){
        print "O mês é Julho.";
    }elseif ($mes =="mes8"){
        print "O mês é Agosto.";
    }elseif ($mes =="mes9"){
        print "O mês é Setembro.";
    }elseif ($mes =="mes10"){
        print "O mês é Outubro.";
    }elseif ($mes =="mes11"){
        print "O mês é Novembro.";
    }elseif ($mes =="mes12"){
        print "O mês é Dezembro";
    }
?>
            </div>
</form>
</html>