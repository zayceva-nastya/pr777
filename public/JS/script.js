let fun = function () {

    let addButton = document.getElementById("addButton");
    addButton.innerText = addButton.innerText === "Close" ? "Add exercise" : "Close"

    document.getElementById("addForm").classList.toggle("hidden")
    document.getElementById("shadow").classList.toggle("hidden")
}

if (document.getElementById("addButton") && document.getElementById("closeFormButton") && document.getElementById("shadow")) {

    document.getElementById("addButton").onclick = fun

    document.getElementById("closeFormButton").onclick = fun

    document.getElementById("shadow").onclick = fun
};

let fun2 = function () {

    let addButton2 = document.getElementById("addButton2");
    addButton2.innerText = addButton2.innerText === "Убрать" ? "Добавить" : "Убрать"

    document.getElementById("addForm2").classList.toggle("hidden")
    document.getElementById("shadow2").classList.toggle("hidden")
}

document.getElementById("addButton2").onclick = fun2

document.getElementById("closeFormButton2").onclick = fun2

document.getElementById("shadow2").onclick = fun2;

$(function(){
    $('.repeat').click(function(){
        var classes =  $(this).parent().attr('class');
        $(this).parent().attr('class', 'animate');
        var indicator = $(this);
        setTimeout(function(){ 
            $(indicator).parent().addClass(classes);
        }, 20);
    });
});


