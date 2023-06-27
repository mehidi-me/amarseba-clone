document.addEventListener("wheel", function (event) {
    if (document.activeElement.type === "number") {
        document.activeElement.blur();
    }
});

document.addEventListener("keydown", function (e) {
    if (document.activeElement.type === "number") {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    }
});


$(document).ready(function(){
    $(".collapse-item").click(function(){
        if(this.innerHTML != 'Close'){
            this.innerHTML = 'Close';
        }else{
            this.innerHTML = 'More';
        }
    })
});