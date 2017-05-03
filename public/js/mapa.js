
function handler(response) {

	var item;
  

	for (var i = 0; i < response.items.length; i++) {
		item = response.items[i];
		console.log(item.markerOptions.iconStyler)
		appendToMenu("menuFarmacologicos",item)		
	 
	//document.getElementById("content").innerHTML += "<br>" + item.name;

	  }
}


function appendToMenu(idMenu,item){
	$(function(){
			$("#"+idMenu).append("<li><a onclick='clickItem(this)' id="+item+" data-toggle=\"pill\" href=\"#panel-mapa\">"+item.name+"</a></li>");
	});
}

function clickItem(item){
	console.log(item.id);
}





  