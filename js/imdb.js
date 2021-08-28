
function grab_imdb(){
	if(document.getElementById("imdb_grabber_input").value == ""){
		alert("لطفا کد فیلم یا سریال را وارد کنید")
}else{
		document.getElementById('mess_p_imdb').style.display = "block";


const xhttp = new XMLHttpRequest();
xhttp.onload = function(){
	document.getElementById('mess_p_imdb').style.display = "none";


document.getElementById("imdb_rec").innerHTML = (this.responseText)

}
xhttp.open("GET", "http://localhost/wpp/wordpress/wp-content/plugins/wp_imdb_grabber/grabber.php?code="+document.getElementById("imdb_grabber_input").value);
xhttp.send();

}
}