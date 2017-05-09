<?php
 $Server = "localhost";
   $User = "RedeNext";
   $Pass = "fD0iRo82EzkynriY";
   $Data = "RedeNext";
$SQLconn = mysql_connect($Server,$User, $Pass) or print(mysql_error()); 
mysql_select_db($Data, $SQLconn) or print(mysql_error()); 
$SQL = "SELECT DISTINCT * FROM clientes where status<>3"; 
$Return = mysql_query($SQL, $SQLconn); 
//-------------------------------------------------------------------------------
echo '<table class="table table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th>Nome</th>';
echo '<th>Endere�o</th>';
echo '<th>N�</th>';
echo '<th>CPF</th>';
echo '<th>Celular</th>';
echo '<th>Plano</th>';
echo '<th>Vencimento</th>';
echo '<th>Prefer�ncia</th>';
echo '<th>Status</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
while ($r = mysql_fetch_assoc($Return)) {
    echo '<tr>';
    echo '<td>'.$r["nome"].'</td>';
    echo '<td>'.$r["endereco"].'</td>';
    echo '<td>'.$r["numero"].'</td>';
    echo '<td>'.$r["cpf"].'</td>';
    echo '<td>'.$r["celular"].'</td>';
    echo '<td>'.$r["plano"].' Megas</td>';
    echo '<td>'.$r["data_vencimento"].'</td>';
    if ($Rr["preferencia"] == "0"){	echo '<td>Sem</td>';}
    if ($r["preferencia"] == "1"){	echo '<td>Knet</td>';}
    if ($r["preferencia"] == "2"){	echo '<td>KGnet</td>';}
    if($r["status"] == "0"){ 
    echo '<td><input type="checkbox" value="" style="margin-left:17px;"></td>';	
    }
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
//-------------------------------------------------------------------------------
//mysql_free_result($Return); 
//mysql_close($SQLconn); 
?>