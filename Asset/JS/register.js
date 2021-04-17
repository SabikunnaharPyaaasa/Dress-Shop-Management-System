"use strict"

window.nvalid = false;
window.evalid = false;
window.gvalid = false;
window.pconvalid = false;
window.uvalid = false;
window.dvalid = false;
window.pvalid = false;
addvalid = false;
window.contactvalid = false;

var i;

//name validation
function nameEmpty() {
    var name = document.getElementById("name").value;
    var lent = name.length;

    if (name == "") {
        document.getElementById("nameMsg").innerHTML = "*field can't be empty!";

        window.nvalid = false;
    }
    if (!isNaN(name)) {
        document.getElementById("nameMsg").innerHTML = "*Only Characters are allowed!";
        window.nvalid = false;
    }


}


function nameRemover() {
    document.getElementById('nameMsg').innerHTML = "";

}
//Contact number validation

function contactEmpty() {
    var contact_number = document.getElementById("contact_number").value;
    var lent = contact_number.length;
    if (contact_number == "") {
        document.getElementById("contactMsg").innerHTML = "contact number should not be empty!";
        window.contactvalid = false;
    } else {
        window.contactvalid = true;
    }
}


function contactRemover() {
    document.getElementById('contactMsg').innerHTML = "";

}

//email validation
function emailEmpty() {
    var email = document.getElementById("email").value;

    var email_datas = '' +
        'check_email=' + window.encodeURIComponent('ON') +
        '&emailId=' + window.encodeURIComponent(email);
    let xhttp = new XMLHttpRequest();
    var pos = email.search("@");
    var pos1 = email.search(".com");
    if (email == "") {
        document.getElementById("emailMsg").innerHTML = "  *field can't be empty!";
        window.evalid = false;
    } else if (email != "") {

        xhttp.open('POST', '../php/regCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(email_datas);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("emailMsg").innerHTML = this.responseText;


            }
        }

        window.evalid = false;
    } else if (pos == -1 || pos1 == -1 || pos1 < pos) {
        document.getElementById("emailMsg").innerHTML = "  *invalid email! must be like (sample@example.com)";
        window.evalid = false;
    } else {
        window.evalid = true;
    }
}

function emailRemover() {
    document.getElementById('emailMsg').innerHTML = "";

}


//Username Validation
function unameEmpty() {
    var uname = document.getElementById("username").value;
    var username_datas = '' +
        'check_user=' + window.encodeURIComponent('ON') +
        '&userName=' + window.encodeURIComponent(uname);
    let xhttp = new XMLHttpRequest();

    if (uname == "") {
        document.getElementById("usernameMsg").innerHTML = "  *field can't be empty!";

        window.uvalid = false;
    } else if (uname != "") {
        xhttp.open('POST', '../php/regCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(username_datas);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("usernameMsg").innerHTML = this.responseText;


            }
        }
    } else {
        window.uvalid = true;
    }
}

function unameRemover() {
    document.getElementById('usernameMsg').innerHTML = "";

}



// gender validation

function genderEmpty() {
    if (document.getElementById("Male").checked) {
        window.gvalid = true;
    } else if (document.getElementById("Female").checked) {
        window.gvalid = true;
    } else if (document.getElementById("Other").checked) {
        window.gvalid = true;
    } else {
        document.getElementById("genderMsg").innerHTML = "  *please choose a gender!";
        window.gvalid = false;

    }
}

function genderRemover() {
    document.getElementById("genderMsg").innerHTML = "";
}

//date of birth validation

function dobEmpty() {
    var date = document.getElementById("dob").value;
    //alert(date);
    if (date == "") {
        document.getElementById("dobMsg").innerHTML = "  *field can't be empty!";

        window.dvalid = false;
    } else {
        window.dvalid = true;
    }

}

function dobRemover() {
    document.getElementById("dobMsg").innerHTML = "";

}

//Address validation
function addEmpty() {
    var address = document.getElementById("address").value;
    //alert(date);
    if (address == "") {
        document.getElementById("addMsg").innerHTML = "  *field can't be empty!";

        window.addvalid = false;
    } else {
        window.addvalid = true;
    }

}

function addRemover() {
    document.getElementById("addMsg").innerHTML = "";

}

//user type  validation
function usertypeEmpty() {
    var userType = document.getElementById("user_type").value;

    if (userType == "") {
        document.getElementById("utMsg").innerHTML = "*please choose at least one.";
        window.gvalid = false;

    } else {
        window.gvalid = true;
    }
}

function uTRemover() {
    document.getElementById("utMsg").innerHTML = "";
}

//password validation
function PEmpty() {
    var password = document.getElementById("password").value;
    var plength = password.length;
    if (password == "") {
        document.getElementById("passMsg").innerHTML = "*password field can't be empty!";
        window.pvalid = false;

    }
    if ((plength < 6) || (plength > 8)) {
        document.getElementById("passMsg").innerHTML = "*password field should between 6 to 8 !";
        window.pvalid = false;

    } else {
        window.pvalid = true;

    }
}

function pRemover() {
    document.getElementById("passMsg").innerHTML = "";
}


function PconEmpty() {
    var password = document.getElementById("password").value;
    var conpassword = document.getElementById("confirm_password").value;

    if (conpassword == "") {
        document.getElementById("cpassMsg").innerHTML = "*confirm password field can't be empty!";
        window.pconvalid = false;

    }

    if (conpassword != password) {
        document.getElementById("cpassMsg").innerHTML = "*password and confirmpassword is not maching!";
        window.pconvalid = false;

    } else {
        window.pconvalid = true;

    }
}

function pconRemover() {
    document.getElementById("cpassMsg").innerHTML = "";
}

function validation() {
    if (window.nvalid == true && window.evalid == true && window.gvalid == true && window.pconvalid == true && window.uvalid == true &&
        window.dvalid == true && window.pvalid == true && window.contactvalid == true && addvalid == true) {
        return true;
    } else {
        return false;
    }
}