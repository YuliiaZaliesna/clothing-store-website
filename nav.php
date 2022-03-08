<?php
$nav = '<nav><table>';
$nav .= '<tr><td></td><a href="sklepStart.php">Strona główna</a><td></td></tr>';
$nav .= '<tr>
<td><a href="sklepViewTowar.php">Zobacz towary</a></td>
<td><a href="sklepViewKlient.php">Zobacz klientów</a></td>
<td><a href="sklepViewOrder.php">Zobacz transakcje</a></td>
</tr>';
$nav .= '<tr>
<td><a href="sklepAddTowar.php">Wpisz nowy towar</a></td>
<td><a href="sklepAddKlient.php">Wpisz nowego klienta</a></td>
<td><a href="sklepAddOrder.php">Wpisz nową transakcję</a></td>
</tr>';
$nav .= '</table></nav>';
echo $nav;