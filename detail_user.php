<?php
    $user_id = $_GET['id'];
    $url = "https://reqres.in/api/users/".$user_id;
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
	<title>MNC Portal Test 3.b</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Detail User</h1>
	<table cellspacing='0'>
		<thead>
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
			</tr>
		</thead>
		<tbody>
            <?php
            
                echo "<tr>
                        <td>".$data['data']['id']."</td>
                        <td>".$data['data']['email']."</td>
                        <td>".$data['data']['first_name']."</td>
                        <td>".$data['data']['last_name']."</td>
                    </tr>";
            ?>
		</tbody>
	</table>
</body>
</html>