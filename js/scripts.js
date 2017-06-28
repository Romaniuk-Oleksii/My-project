var ButId;
var ButName;


function reply_click (clicked_id){
   	window.ButId=clicked_id.id;
   	window.ButName=clicked_id.name;
}


function load(){
	set_tumorrow_date("select_dd", "select_mm", "select_yyyy");
	clone_or_remove_div();	
}

function change_name(){
	count = 0;
	return function(){
	return count+=1;};
}

function clone_or_remove_div(){
	var calc = change_name();
	const btnAd = document.querySelector('#btn');
	const container = document.querySelector('.container');
	const block = document.querySelector('.inputs');
	const blockB = document.querySelector('.inputsBefore');
	const btnRm = document.querySelector('.btnRm');

	btnAd.addEventListener('click', function(e) {
		e.preventDefault();
		let clone = block.cloneNode(true);
		var pref = calc();
		clone.id = block.id + "_" + pref;
		container.insertBefore(clone, blockB)
		clear_div_elements(clone, pref);
	});

	btnRm.addEventListener('click', function(e) {
		alert(divId);
		e.preventDefault();
		alert(divId);
		let name = document.getElementsByName(divId);
		let name1 = divId + name[0].id;
		alert(name1);
		let select = document.getElementById(name1);
		alert(select.id);
		select.remove();	

	});

	// btnRm.addEventListener('click', function(e){
	// 	e.preventDefault();
	// 	alert($(this).closest().attr('id'));
	// 	// var elem = document.querySelector("#one");
	// 	// elem.remove();
	// })
}

function clear_div_elements(clone, pref){
	var elements = clone.getElementsByTagName("*");

       for (var j = 0, len = elements.length; j < len; j++)
        { 
            if (elements[j].name)
                {
            	elements[j].id = elements[j].id + "_" + pref;
                elements[j].value=''; 
                } 
         }
}

function set_tumorrow_date(dd_ID, mm_ID, yyy_ID){
	var today = new Date();
	var dd = today.getDate() + 1; //tomorrow date
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	if(dd<10) {
	    dd ='0'+ dd
	} 
	if(mm<10) {
	    mm ='0'+ mm
	} 
	tomorrow = dd +'.'+ mm +'.'+ yyyy;
	document.getElementById(dd_ID).value = dd;
	document.getElementById(mm_ID).value = mm;
	document.getElementById(yyy_ID).value = yyyy;
}



function check_uncheck(element_id){
	var element_value = document.getElementById(element_id).value;
	var element = document.getElementById(element_id);
	
	if ((element_value > 507) || (element_value == "yes")) {
		document.getElementById(element.name).style.display = 'block'; 
	}
	else{
		document.getElementById(element.name).style.display = 'none'; 
	}
}
	








