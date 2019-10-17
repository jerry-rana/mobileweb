function menu(){
  var x = document.getElementById("menuItems");
  if(x.style.display === "block"){x.style.display = "none";}else{x.style.display = "block";}
}
function checkWord(){
	var strng = document.getElementById('input-text').value;
	var text = ["@", "sex", "porn"]
	var result;
		for(var x = 0; x < text.length; x++){
			if(strng.indexOf(text[x]) > -1){
				result = text[x];
				//break;
			document.getElementById('input-text').value = '';
			alert('Invalid Words!');
			return false;
				}
		}
	}
function notEmp(){
	var strng = document.getElementById('input-text').value;
	if(strng == '' || strng == null){
		alert('Input can\'t be blank!');
		return false;
	}
}