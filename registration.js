var shadow="2px 2px 2px 2px black";
document.getElementById('showLogin').addEventListener('click',function(){
	document.getElementById('login').style.display='block';
	document.getElementById('showLogin').style.boxShadow=shadow;
	document.getElementById('signup').style.display='none';
	document.getElementById('showSignup').style.boxShadow='none';
});
document.getElementById('showSignup').addEventListener('click',function(){
	document.getElementById('signup').style.display='block';
	document.getElementById('showSignup').style.boxShadow=shadow;
	document.getElementById('login').style.display='none';
	document.getElementById('showLogin').style.boxShadow='none';
});
