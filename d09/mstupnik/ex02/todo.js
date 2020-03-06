let ft_list;
let cookie = [];

window.onload = function(){
	document.querySelector("#new").addEventListener("click", newTODO)
	ft_list = document.getElementById("ft_list");
	var cooks = document.cookie;
	if (cooks){
		cookie = JSON.parse(cooks);
		cookie.forEach(function(x){
			addTODO(x);
		});
	}
};

window.onunload = function () {
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
    document.cookie = JSON.stringify(newCookie);
};

function newTODO(){
	var form = prompt("Add new todo", '');
		if (form !== null)
			addTODO(form);
}

function addTODO(form){
	var div = document.createElement("div");
	var cooks = document.cookie;
	div.innerHTML = form;
	div.addEventListener("click", function(){
    if (confirm("Delete todo?")){
        this.parentElement.removeChild(this);
   }
});
	ft_list.insertBefore(div, ft_list.firstChild);
}

