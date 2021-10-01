const btn_submit = document.getElementById("btn_submit");

let fields = document.querySelectorAll("input")
document.addEventListener("DOMContentLoaded", () => {

 focus();


});
function focus() {
    for (let field of fields) {

        field.onfocus = function () {
            enableFocus()
        }
        console.log(field.value);

        function enableFocus() {
            field.style.backgroundColor = "#BBDEFB";

            field.onblur = function () {
                disableFocus()
            };

        }

        function disableFocus() {
            field.style.backgroundColor = "#FFCDD2";
        }
        if (field.value){

        }
    }


}

