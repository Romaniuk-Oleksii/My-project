
const btn = document.querySelector('.btn');

const container = document.querySelector('.container');
const block = document.querySelector('.inputs');

btn.addEventListener('click', function(e) {
	e.preventDefault();
	let clone = block.cloneNode(true);
	container.insertBefore(clone, block)
})







function load(){
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
	document.getElementById("select_dd").value = dd;
	document.getElementById("select_mm").value = mm;
	document.getElementById("select_yyyy").value = yyyy;
}
function reload(){
	window.location.reload()
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
	
	function add(){
	
    n++;
}

// const btn = document.querySelector('.btn');
// const container = document.querySelector('.inputs');
// let count = 1; // Счетчик полей

// btn.addEventListener('click', function(e) {
// 	e.preventDefault();
// 	let field = document.createElement('input');
// 	field.setAttribute('value', `Field ${count += 1}`) // Вывод значения поля для примера
// 	container.appendChild(field);
// })








