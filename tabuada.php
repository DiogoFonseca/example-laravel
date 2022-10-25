<table>
	<tbody>
		<?php
			for ($x = 1; $x <= 10 ; $x += 1) {
				if (!($x%3)) {
					echo "<tr>";
					echo "<td>"."8 x"."</td>"."<td>".$x."</td>"."<td>= ".($x*8)."</td>";
					echo "</tr>";
				}
			}
		?>
	</tbody>
</table>
