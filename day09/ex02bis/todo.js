function ft_sup()
{
    if(confirm("confirmation suppression"))
    {
    var ft_list = $("#ft_list");
    var child;
    child = ft_list.children();
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
        var ft_list = $("#ft_list");
        var newDiv = document.createElement("div");
        $(newDiv).on("click",ft_sup);
        $(newDiv).text(x);
        ft_list.prepend($(newDiv));
        tab.unshift(x);
        document.cookie="ft_list="+JSON.stringify(tab);
    }
}
$(function(){
var cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)ft_list\s*\=\s*([^;]*).*$)|^.*$/, "$1");
if(cookieValue)
{
    tab = JSON.parse(cookieValue);
    var max = tab.length;
    while(--max >= 0){
        var ft_list = $("#ft_list");
        var newDiv = document.createElement("div");
        $(newDiv).on("click",ft_sup);
        $(newDiv).text(tab[max]);
        ft_list.prepend($(newDiv));
    }
}})