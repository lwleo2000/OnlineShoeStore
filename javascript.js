//Manish and womanish Theme colour
function themeColor(gender) {
    var body = document.getElementsByTagName("body")[0];
    if (gender == "male") {
        body.classList.add("manish");
    }
    else if (gender == "female") {
        body.classList.add("womanish");
    }
    else {
        body.classList.add("default");
    }
}

//Menu Sidebar
function openSidebar() {
    document.getElementById("sidebar").style.width = "300px";
    document.getElementById("overlay").style.display = "block";
}

function closeSidebar() {
    document.getElementById("sidebar").style.width = "0px";
    document.getElementById("overlay").style.display = "none";
}

//Aministrator Data Editing
function AddPopup() {
    document.getElementById("add_popup").style.visibility = "visible";
    document.getElementById("overlay").style.display = "block";
}

function CloseAddPopup() {
    document.getElementById("add_popup").style.visibility = "hidden";
    document.getElementById("overlay").style.display = "none";
}

function EditPopup(count) {
    topFunction();
    document.getElementsByClassName("edit_popup")[count - 1].style.visibility = "visible";
    document.getElementById("overlay").style.display = "block";
}

function CloseEditPopup(count) {
    document.getElementsByClassName("edit_popup")[count - 1].style.visibility = "hidden";
    document.getElementById("overlay").style.display = "none";
}

//Confirmation Popup
function confirmation(func) {
    if (func == "add") {
        var choice = confirm("Are you sure to Add the data?");
        if (choice) {
            window.alert("Data sucessfully added.");
            return true;
        }
        else
            return false;
    }
    else if (func == "edit") {
        var choice = confirm("Are you sure to EDIT the data?");
        if (choice) {
            window.alert("Data sucessfully edited.");
            return true;
        }
        else
            return false;
    }
    else if (func == "delete") {
        var choice = confirm("Are you sure to DELETE the data?");
        if (choice) {
            window.alert("Data sucessfully deleted.");
            return true;
        }
        else
            return false;
    }
}

//Edit FAQ - Enable text for OTHERS category
function CheckOtherRadio_Add() {
    if (document.getElementById("add_other_radio").checked) {
        document.getElementById("add_other_text").disabled = false;
    }
    else {
        document.getElementById("add_other_text").disabled = true;
    }
}
function CheckOtherRadio_Edit(count) {
    if (document.getElementsByClassName("edit_popup")[count - 1].style.visibility == "visible") {
        var text = document.getElementsByClassName("edit_other_text")[count - 1];
        if (document.getElementsByClassName("edit_other_radio")[count - 1].checked) {
            text.disabled = false;
        }
        else {
            text.disabled = true;
        }
    }
}

//Admin Contact Form
function CheckboxDisabled(status, count) {
    var disable = document.getElementsByClassName("admin_contact_checked");
    var label_status = document.getElementsByClassName("label_status");
    if (status != 0) {
        disable[count - 1].checked = true;
        disable[count - 1].disabled = true;
        label_status[count - 1].innerHTML = "Replied";
    }
}


//Slideshow
var counter = 2;
setInterval(function () {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);

//Scroll the new arrival product list
function slide_right() {
    var product_list = document.getElementById('product_list');
    sideScroll(product_list, 'right', 20, 442, 64);
}

function slide_left() {
    var product_list = document.getElementById('product_list');
    sideScroll(product_list, 'left', 20, 442, 64);
}

function sideScroll(element, direction, speed, distance, step) {
    scrollAmount = 0;
    var slideTimer = setInterval(function () {
        if (direction == 'left') {
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if (scrollAmount >= distance) {
            window.clearInterval(slideTimer);
        }
    }, speed);
}

//FAQ Accordions
window.addEventListener("DOMContentLoaded", function () {
    var faq = document.getElementsByClassName("faq_set");
    for (var i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function () {
            this.classList.toggle("clicked");
        })
    }
})

//Sort by Accordions
window.addEventListener("DOMContentLoaded", function () {
    var expand = document.getElementsByClassName("title1");
    for (var i = 0; i < expand.length; i++) {
        expand[i].addEventListener("click", function () {
            this.classList.toggle("clicked");
        })
    }
})


//Sign up password validation
function validateSignUp() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    //Check if password less than 8 characters.
    if (password.length < 8) {
        document.getElementById("password_message").innerHTML = "*Password should have at least 8 characters";
        document.getElementById("password").value = "";
        document.getElementById("confirm_password").value = "";
        return false;
    }
    //Check if password more than 15 characters.
    if (password.length > 15) {
        document.getElementById("password_message").innerHTML = "*Password should not exceed 15 characters";
        document.getElementById("password").value = "";
        document.getElementById("confirm_password").value = "";
        return false;
    }
    //Check if password is same as confirm password.
    if (password != confirmPassword) {
        document.getElementById("password_message").innerHTML = "*Password does not match with Confirm Password.";
        document.getElementById("password").value = "";
        document.getElementById("confirm_password").value = "";
        return false;
    }
    return true;
}


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function AddCartPopup() {
    document.getElementsByClassName("add_cart_popup").style.visibility = "visible";
    document.getElementById("overlay").style.display = "block";
}

function CloseAddCartPopup() {
    document.getElementsByClassName("add_cart_popup").style.visibility = "hidden";
    document.getElementById("overlay").style.display = "none";
}
