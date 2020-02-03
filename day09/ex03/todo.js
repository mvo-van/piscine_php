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
        $.post("delete.php",{index:i},function(data, statu){});
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
        $.post("insert.php",{"new":x},function(data, statu){});
    }
}
$.post("select.php",{},function(data, statu){
    if(data != "false")
    {
        tab = JSON.parse(data);
        var max = tab.length;
        while(--max >= 0){
            var ft_list = $("#ft_list");
        var newDiv = document.createElement("div");
        $(newDiv).on("click",ft_sup);
        $(newDiv).text(tab[max]);
        ft_list.prepend($(newDiv));
        }
}})