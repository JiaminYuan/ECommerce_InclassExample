<html>
<head>
	<title>Some title</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
	<p><!--display the data as a table-->
		<table>
			<tr><th>ID</th><th>Name</th><th>Action</th></tr>
			<?php 
				//$data
				$c = count($data);
				$i = 0;

				foreach ($data as $item){
					echo "<tr>
						<td>$item->id</td>
						<td>$item->name</td>
						<td><a href='/Food/delete/$item->id'>delete</a></td>
					</tr>";
				}
			?>
		</table>
	</p>
	<form action='' method='post'>
		Input the food that you like:
		<input type="text" name="new_food"/>

		<input type="submit" name="action" value="Send"/>

	</form>
	<ul>
		<li><a href='/Main/index'>index</a></li>
		<li><a href='/Main/index2'>index2</a></li>
	</ul>
</body>
</html>