
	function formcheck(){
	if(document.getElementById('name').value=='')
	{
	document.getElementById('name').focus();
	alert('please provide your first name!');
	return false;
	}
	else if(document.getElementById('name1').value=='')
	{
	document.getElementById('name1').focus();
	alert('please provide your last name!');
	return false;
	}
	else if(document.getElementById('email').value=='')
	{
	document.getElementById('email').focus();
	alert('please provide your email!');
	return false;
	}
	else if(document.getElementById('city').value=='')
	{
	document.getElementById('city').focus();
	alert('please provide your City!');
	return false;
	}
	else if(document.getElementById('zip').value=='')
	{
	document.getElementById('zip').focus();
	alert('please provide your zip!');
	return false;
	}
	else if(document.getElementById('phone').value=='')
	{
	document.getElementById('phone').focus();
	alert('please provide your phone!');
	return false;
	}
	else if(document.getElementById('comment').value=='')
	{
	document.getElementById('comment').focus();
	alert('please provide your comment!');
	return false;
	}
	}

	function popup(a){
	window.open(a,'new','width=800,height=600')
	}

	