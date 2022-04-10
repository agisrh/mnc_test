<?php
    $url = "https://reqres.in/api/users?page=2";
    // inisialisasi CURL
    $ch = curl_init();
    // return response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set url
    curl_setopt($ch, CURLOPT_URL,$url);
    // Execute
    $result=curl_exec($ch);
    // Close
    curl_close($ch);
    $data = json_decode($result, true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>MNC Portal Test 3.a</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>List User</h1>
	<table cellspacing='0'>
		<thead>
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            <?php
            foreach($data['data'] as $row)
            {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['first_name']."</td>
                        <td>".$row['last_name']."</td>
                        <td><a href='detail_user.php?id=".$row['id']."'>Detail</a></td>
                    </tr>";
            }
            ?>
		</tbody>
	</table>
</body>
</html>