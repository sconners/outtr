<html>
	<head>
		<title>outtr</title>
		<script>
			function funStartup(){
				// Placeholder function for page startup
			}
		</script>
		<style>
			p, li{
				margin: 0px;
				padding: 8px;
			}
			#divBackground{
				position: absolute;
				left: 0px;
				top: 0px;
				margin: 0px;
				padding: 0px;
				width: 100%;
				height: 100%;
				background-color: #444;
			}
			#divHowLockersWork{
				position: absolute;
				left: 32px;
				top: 32px;
				margin: 0px;
				padding: 16px;
				background-color: #DDD;
			}
		</style>
	</head>
	<body onload="funStartup();">
		<div id="divBackground"></div>
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
			<p>
		</div>
	</body>
</html>