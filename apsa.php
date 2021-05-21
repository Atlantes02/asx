<?php
    include 'banco.php';
	$link = bancoConecta();

	$sql = <<<EOT

        SELECT 
            c.Name, c.Population, c.GNP, c.LifeExpectancy
        FROM 
            country as c
        WHERE
            c.Continent = 'South America'
        ORDER BY 
            c.LifeExpectancy DESC
EOT;
?>
<h1>Países sul americanos</h1>
<table class="table table-dark">
	<thead>
		<tr>
		<th scope="col">Name</th>
		<th scope="col">Population</th>
		<th scope="col">GNP</th>
		<th scope="col">LifeExpectancy</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Population']?></td>
				<td><?=$linha['GNP']?></td>
				<td><?=$linha['LifeExpectancy']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>