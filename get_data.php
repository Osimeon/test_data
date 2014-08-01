<?php
	$json = file_get_contents('http://couponfollow.com/files/addon/catc_helpers.json'); 
	
	
	$json_a = json_decode($json, true);
	$json_o = json_decode($json);

	foreach($json_a[helpers] as $p){
		$domain = $p[domainName];
		$cart = $p[cartKeyword];
		$input = $p[inputKeyword];
		$selector = $p[inputSelector];
		$interval = $p[intervalTime];
		$max = $p[maxTries];
		$modified = $p[modifiedOn];
		
		$sql = "INSERT INTO helpers (domain_name, cart_keyword, input_keyword, input_selector, interval_time, max_tries, modified_on) VALUES ('$domain', '$cart', '$input', '$selector', '$interval', '$max', '$modified')";
		$conn = mysql_connect('localhost', 'root', '1PcNOu8hZ1');
		mysql_select_db('side_buyer', $conn);
		mysql_query($sql);
	}
?>