<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css\style.css">
   </head>
   <body>
   <h2> Edit, Delete, View Module </h2>
   <p> Use this form to perform Edit, Delete, View Module. </p>
   <div class="container">
		<table id="usertable">
				<thead>
							<tr>
												<th>#</th>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>AcessLevel</th>
												<th>Address</th>
												<th>Password</th>
												<th>Action</th>
						</tr>
				</thead>
				<tbody>
				<?php
										$dbhost = 'localhost';
										$dbuser = 'root';
										$dbpwrd = '';
										$dbname = 'users';
										$conn = mysqli_connect($dbhost, $dbuser, $dbpwrd, $dbname) or die('Mysql Connection Failed....' . mysqli_error());
										if (!$conn)
										{
											die("Connection failed: " . mysqli_error());
										}
										$query = "SELECT * FROM  users ORDER BY id ASC";
										if ($results = mysqli_query($conn, $query))
										{
											if (mysqli_num_rows($results) > 0)
											{
												$ctr = 1;
												while ($row = mysqli_fetch_assoc($results))
												{
													echo '<tr>';
													echo '<td>' . $ctr . '</td>';
													echo '<td>' . $row['fname'] . '</td>';
													echo '<td>' . $row['lname'] . '</td>';
													echo '<td>' . $row['accesslevel'] . '</td>';
													echo '<td>' . $row['address'] . '</td>';
													echo '<td>' . $row['password'] . '</td>';
													echo '<td><a href="edit.php?id=' . $row['id'] . '"> <button class="button"> Edit </button> </a> <a href="delete.php?id=' . $row['id'] . '"> <button class="button"> Delete </button> </a> </td>';
													echo '</tr>';

													$ctr++;
												}

												mysqli_free_result($results);
											}
										}

								?>
				</tbody> 
		</table>
   </div>
   </body>
</html>
