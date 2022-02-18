const selected_item = document.getElementsByClassName("selected_item");
function display_selected(){
    console.log("hgghj")
}
for (let i = 0; i < selected_item.length; i++) {
    selected_item[i].addEventListener("click", display_selected);
}