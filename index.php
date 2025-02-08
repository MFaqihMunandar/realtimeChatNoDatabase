<?php
session_start();
session_destroy();
session_start();
$_SESSION['UID']	= rand(10,99).date('ymdHis').rand(100,999);
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Chat With NO History</title>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
        <script src="script.js"></script>
		<style>
			.mainContent{
				width:100%;
				height:100%;
				background-color: tomato;
				color: white;
			}
			.chatTo{
				width:100%;
				background-color:green;
				color:white;
				text-align:right;
				padding:10px;
			}
			.chatFrom{
				width:100%;
				background-color:Yellow;
				color:black;
				text-align:Left;
				padding:10px;
			}
		</style>
    </head>
    <body>
		<p>You refresh this, your chat will be gone! This is Your ID "<?php echo $_SESSION['UID'];?>"</p>
		<input id='to' placeholder='ID' /></br>
		<div class='mainContent' id='pageMsg'>
		</div></br>
		<input id='pesan' placeholder='Pesan' />
		<span onclick='kirim();' style='cursor:pointer;' >Kirim</span>
		<script>
			var UID 	= "<?php echo $_SESSION['UID'];?>";
			function kirim(){
				var id		= document.getElementById('to');
				var pesan 	= document.getElementById('pesan');
				if(id.value === ''){
					return alert('ID Empty!');
				}
				if(pesan.value === ''){
					return;
				}
				const msg = {
					ID: id.value,
					MYID: "<?PHP echo $_SESSION['UID'];?>",
					PESAN: pesan.value
				}
				pasangPesan(msg);
			}
			setInterval(function () {
				if(namafilenya !== ''){
					cekFIle(namafilenya);
				}
			}, 3000);
		</script>
	</body>
</html>