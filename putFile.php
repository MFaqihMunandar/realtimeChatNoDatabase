<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$data   	= json_decode(file_get_contents("php://input"));
$ID			= $data->ID;
$MYID		= $data->MYID;
$PESAN		= $data->PESAN;
if(file_get_contents('chat/'.$ID.$MYID.'.json') or file_get_contents('chat/'.$MYID.$ID.'.json')){
	$fileChat	= file_get_contents('chat/'.$ID.$MYID.'.json').file_get_contents('chat/'.$MYID.$ID.'.json');
	if(file_get_contents('chat/'.$ID.$MYID.'.json')){
		$namaFile	= 'chat/'.$ID.$MYID.'.json';
	} else {
		$namaFile	= 'chat/'.$MYID.$ID.'.json';
	}
}
if($namaFile == ''){
	$data	= '[]';
	file_put_contents('chat/'.$ID.$MYID.'.json',$data);
	$fileChat	= file_get_contents('chat/'.$ID.$MYID.'.json');
	$namaFile	= 'chat/'.$ID.$MYID.'.json';
}
$fileChat	= json_decode($fileChat);
$kirim	= array(
	Tanggal => date('Y-m-d'),
	Jam		=> date('H:i:s'),
	From	=> $MYID,
	To 		=> $ID,
	Pesan 	=> $PESAN
);
array_push($fileChat,$kirim);
file_put_contents($namaFile,json_encode($fileChat));
header("Content-type: application/json");
//echo json_encode($fileChat);
echo '{"Status":"Terkirim!","fileName":"'.$namaFile.'"}';
exit();
?>