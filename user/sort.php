<?php
include("connectin.php");
if (isset($_GET['dc'])) 
{
	$sort=$_GET['dc'];
	if ($sort=='desc')
	 {
	$q="select *from property ORDER BY rate desc";
	$r=mysql_query($q);
	}
	elseif ($sort=='acen') {
		$q="select *from property ORDER BY rate desc";
		$r=mysql_query($q);

	}

			
		}
		else{
			$q="select *from property";
$r=mysql_query($q);
		}
		

?>
<form  action="sort.php" method="GET">
	<input type="radio" name="dc" value="acen">sort in acending
	<input type="radio" name="dc" value="desc">sort in decending
</form>
     <table>

     	     	<?php
     	while($arr=mysql_fetch_array($r))
								{
							
								?>
								<tr>

     	<td><?=$arr['0']?></td>
     	<td><?php echo $arr[1];?></td>
     	<td><?=$arr['2']?></td>
     	<td><?=$arr['3']?></td>
     	<td><?=$arr['4']?></td>
     	<td><?=$arr['5']?></td>
     	<td><?=$arr['10']?></td>
     	</tr>
     	<?php
     }
     ?>
     	
     </table>                
	

