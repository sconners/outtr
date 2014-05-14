<?php
	ini_set('error_reporting', E_ALL);
?>
<html>
	<head>
		<title>Outtr</title>
		<script>
			function funStartup(){
				// Placeholder function for page javascript startup
			}
		</script>
		<style>
			p, li, table, tr, td{
				margin: 0px;
				padding: 8px;
			}
			table, tr, td{
				border: 1px solid black;
			}
			#divHowLockersWork{
				margin: 0px;
				padding: 16px;
				background-color: #DDD;
			}
			#divLockersAPI{
				margin: 0px;
				padding: 16px;
				background-color: #EEE;
			}
		</style>
	</head>
	<body onload="funStartup();">
		<div id="divHowLockersWork">
			<h3>How Outtr Lockers Work</h3>
			<p>The following happens over SSL.</p>
			<ol>
				<li>Client requests a content locker from Outtr.</li>
				<li>Outtr replies back with an obscure content locker key.</li>
				<li>Client fills their locker with content to be shared.</li>
				<li>Client verifies that the locker has everything.</li>
				<li>Client locks locker.</li>
			</ol>
		</div>
		<div id="divLockersAPI">
			<h3>Lockers Server API</h3>
			<p>The following happens over SSL. All content is base64 encoded.</p>
			<table>
				<tr>
					<td>Action</td>
					<td>URL</td>
					<td>Input</td>
					<td>Output</td>
				</tr>
				<tr>
					<td>Interface (default)</td>
					<td>index.php</td>
					<td>NA</td>
					<td>HTML/CSS/JS for interacting with Outtr.</td>
				</tr>
				<tr>
					<td>New Locker</td>
					<td>locker_new.php</td>
					<td>NA</td>
					<td>32 bit character string.<br/>(example: RRermiw8620Uonnw3WOfqqq90711F0xz)</td>
				</tr>
				<tr>
					<td>Add to Locker</td>
					<td>locker_add.php</td>
					<td>
						Locker Key.<br/>(locker_key=RRermiw8620Uonnw3WOfqqq90711F0xz)<br/>
						Locker Content.<br/>(locker_content=this_is_a_base64_encoded_string)
					</td>
					<td>NA</td>
				</tr>
				<tr>
					<td>Read Locker</td>
					<td>locker_read.php</td>
					<td>Locker Key.<br/>(locker_key=RRermiw8620Uonnw3WOfqqq90711F0xz)</td>
					<td>Locker Content<br/>(this_is_a_base64_encoded_string)</td>
				</tr>
				<tr>
					<td>Lock Locker</td>
					<td>locker_lock.php</td>
					<td>Locker Key.<br/>(locker_key=RRermiw8620Uonnw3WOfqqq90711F0xz)</td>
					<td></td>
				</tr>
			</table>
		</div>
	</body>
</html>