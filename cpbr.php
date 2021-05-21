<?php
    include 'banco.php';
	$link = bancoConecta();

	$sql = <<<EOT

        SELECT 
            ci.Name, ci.Population
        FROM 
            city as ci
        WHERE
            ci.CountryCode ='BRA'
EOT;
?>
<h1>Cidades brasileiras e suas populações</h1>
<table class="table table-dark">
	<thead>
		<tr>
		<th scope="col">Nome</th>
		<th scope="col">População</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Population']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>