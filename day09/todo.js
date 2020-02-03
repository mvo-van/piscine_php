function ft_new(){
    var x = prompt();
    if(x){
        var newDiv = document.createElement("div");
        var newText = document.createTextNode(x);
        newDiv.appendChild(newText);
        var currentDiv = document.getElementById('div');
        document.body.insertBefore(newDiv, currentDiv);
    }



}