var word = document.getElementById("ProductID").value.length;
document.getElementById("ProductID").addEventListener("change", validateID)
function validateID(){
    var PID = document.getElementById("ProductID").value;
    if(PID.length!=19){
        alert("Check your product id again. Write the same as the placeholder, and type it slowly")
        document.getElementById("ProductID").value = "";
    }
}
function autoADDchar(){ //menulis karakter "-" ke dalam form
    if (document.getElementById("ProductID").value.length >= word){ //reset the value when user delete ID
        if (document.getElementById("ProductID").value.length == 4 || document.getElementById("ProductID").value.length == 9 || document.getElementById("ProductID").value.length == 14){
            var value = document.getElementById("ProductID").value;
            value = value + "-";
            document.getElementById("ProductID").value = value;
        }
    }
    word = document.getElementById("ProductID").value.length;
}
function SubmitClicked(){
    var PID = document.getElementById("ProductID").value;
    if(PID.length!=19){
        return false
    }
}

