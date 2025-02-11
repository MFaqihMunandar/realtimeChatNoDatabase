<?php
session_start();
$_SESSION['UID']	= $_POST['uidnya'];
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Chat With NO History</title>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link rel="stylesheet" href="css/mystyle.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
        <script src="script/script.js"></script>
    </head>
    <body>
		<div class='mainRoom' >
			<div class='headContent' >
				<div class='headContentLeft'>
					<b>ChatKita</b>
				</div>
				<div class='headContentRight'>
					<div class='menuChat'>
						<div class='menuSpan'></div>
						<div class='menuSpan'></div>
						<div class='menuSpan'></div>
					</div>
					<b>
						<span class='judul' id='namaKontaknya' ></span>
					</b>
				</div>
			</div>
			<div class='contentChat'>
				<div class='kontakChat'>
					<span style='width:100%;' >User ID: "<?php echo $_SESSION['UID'];?>"</span>
					<span style='width:100%;' >
						<input id='to' placeholder='UID Penerima' />
					</span>
					<div class='chatList' >
					</div>
					<a class='logOut' href='index.php'>Log-Out</a>
				</div>
				<div class='mainContent'>
					<div class='chatContent' id='pageMsg'>
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
							cekFIle(namafilenya);
						}, 3000);
					</script>
				</div>
			</div>
		</div>
	</body>
</html>