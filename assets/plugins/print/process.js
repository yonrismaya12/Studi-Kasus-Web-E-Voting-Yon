function buttonClick(op, divName, links){
	if(op=="print"){
		var printContents = document.getElementById(divName).innerHTML;     
   		var originalContents = document.body.innerHTML;       
   		document.body.innerHTML = printContents;      
   		window.print();      
   		document.body.innerHTML = originalContents;
	}else if(op=="back"){
		document.location =links;
	}
}
