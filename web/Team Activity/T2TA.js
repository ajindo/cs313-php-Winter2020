function clickMe(){
    alert("Clicked!");
}

function clickForChange(){

}

function changeColor() {
    var textbox_color = "colorText";
    var text_box = document.getElementById(textbox_color);
    
    var first_div = "first_div";
    var div = document.getElementById(first_div);

    var color = text_box.value;
    div.style.backgroundColor = color;
}