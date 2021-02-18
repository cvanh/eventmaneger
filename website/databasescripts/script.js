// the delete part of this script
let buttons = document.getElementsByClassName("deleteevent");
let eventrow = document.getElementsByClassName("eventrow");
var xhttp = new XMLHttpRequest();

for (let index = 0; index < buttons.length; index++) {
    const deletebutton = buttons[index];
    deletebutton.addEventListener('click', function(event){
        let id = this.getAttribute('id'); // declares id as deletebuttonX     
        id = id.replace("deletebutton",""); // removes deltebutton so only the number remains
        event.preventDefault(); // no bueno reload
        xhttp.open("GET", "admin.php?id="+id, true); // makes the get request
        xhttp.send(); // sends xhr request
        location.reload();
    })}
// the edit part of this script
function edit_event(id_edit){
    window.location.assign("./edit_event.php?id_edit="+ id_edit);
    alert(id_event);
}
