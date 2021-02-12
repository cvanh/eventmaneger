let buttons = document.getElementsByClassName("deleteevent");
var xhttp = new XMLHttpRequest();

for (let index = 0; index < buttons.length; index++) {
    const deletebutton = buttons[index];
    deletebutton.addEventListener('click', function(event){
        let id = getAttribute('id')
        event.preventDefault();
        // alert(this.getAttribute('id'));
        xhttp.open("GET", "databasescripts/admin.php?id="+id, true); 
        xhttp.send();
    })
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // console.log(this.responseText);
            alert(id);
        }
    };    
}

// var selectbox = document.getElementById("change_evenementen");
// var inputbox = document.getElementById("input_number");


// selectbox.addEventListener('change', function(e){
//     var currentValue = this.value;

//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             // console.log(this.responseText);
//             inputbox.innerHTML = this.responseText;
//         }
//     };    
    

// });