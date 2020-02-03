function ft_sup()
{
    if(confirm("confirmation suppression"))
    {
    var ft_list = document.getElementById("ft_list");
    var child;
    child = ft_list.childNodes;
    var i = 0;
    while(child[i] != this)
        i++;
    this.remove();
    tab.splice(i,1);
    document.cookie="ft_list="+JSON.stringify(tab);
    }
}

var tab = Array();

function ft_new(){
    var x = prompt();
    x=x.trim();
    if(x.length){
        var ft_list = document.getElementById("ft_list");
        var newDiv = document.createElement("div");
        newDiv.addEventListener("click",ft_sup);
        var newText = document.createTextNode(x);
        newDiv.appendChild(newText);
        ft_list.insertBefore(newDiv, ft_list.firstChild);
        tab.unshift(x);
        document.cookie="ft_list="+JSON.stringify(tab);
    }
}
var cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)ft_list\s*\=\s*([^;]*).*$)|^.*$/, "$1");
if(cookieValue)
{
    tab = JSON.parse(cookieValue);
    var max = tab.length;
    while(--max >= 0){
        var ft_list = document.getElementById("ft_list");
        var newDiv = document.createElement("div");
        newDiv.addEventListener("click",ft_sup);
        var newText = document.createTextNode(tab[max]);
        newDiv.appendChild(newText);
        ft_list.insertBefore(newDiv, ft_list.firstChild);
    }
}