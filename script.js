var namafilenya = '';
function pasangPesan(a){
	$.ajax(
		{
			url:'putFile.php',
			type: "POST",
			data:JSON.stringify( a ),
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			success: function (data) {
				cekFIle(data.fileName);
				namafilenya	= data.fileName;
				alert('sukses');
			},
			error: function (error) {
				console.log(`Error ${error}`);
				alert('Gagal Jaringan!');
			}
		}
	);
}
function cekFIle(a){
	$.ajax(
		{
			url:a,
			type: "POST",
			data:JSON.stringify( a ),
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			success: function (data) {
				createMesage(data);
			},
			error: function (error) {
				console.log(`Error ${error}`);
			}
		}
	);
}
function createMesage(a){
	document.getElementById('pageMsg').innerHTML='';
	a.forEach(function ( item, index){
		if(UID === item.From){
			document.getElementById('pageMsg').innerHTML+='<div class="chatTo" >'+item.Pesan+'</div>';
		} else {
			document.getElementById('pageMsg').innerHTML+='<div class="chatFrom" >'+item.Pesan+'</div>';
		}
	});
}