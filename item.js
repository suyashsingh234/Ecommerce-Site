
var minbtn=document.getElementsByClassName('minus');

for(let i=0;i<minbtn.length;i++){
	minbtn[i].addEventListener('click',function(){
		var count=this.parentElement.querySelector('.count');
		var cnt=parseInt(count.innerHTML);
		if(cnt>0)
			count.innerHTML=cnt-1;
		else
			alert('Cannot be negative!');
	});
}

var plusbtn=document.getElementsByClassName('plus');

for(let i=0;i<plusbtn.length;i++){
	plusbtn[i].addEventListener('click',function(){
		var count=this.parentElement.querySelector('.count');
		count.innerHTML=parseInt(count.innerHTML)+1;
	});
}

var cnt=document.getElementsByClassName('count');
document.getElementById('addcart').addEventListener('click',function(){
	var p="?";
	for(let i=0;i<cnt.length;i++)
	{
		if(i>0)
			p+="&";
		p+="id"+cnt[i].id+"="+cnt[i].innerHTML;
	}
	window.location="add.php"+p;
})
