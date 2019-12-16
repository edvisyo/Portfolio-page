/*Form validation */
function sendMessage() {
    var uName = document.getElementById('name').value;
    var uEmail = document.getElementById('email').value;
    var uMessage = document.getElementById('message').value;

    if(uName == "" && uEmail == "" && uMessage == "") {
        alert("All inputs should be filled!");
    }

    if(uName != "" && uEmail == "" && uMessage == "") {
        alert("Email address or Message field is empty!"); 
    }

    if(uName != "" && uEmail != "" && uMessage == "") {
        alert("Message field is empty!");
    }

    if(uName == "" && uEmail == "" && uMessage != "") {
        alert("Name or Email address left empty!");
    }

    if(uName == "" && uEmail != "" && uMessage == "") {
        alert("Your Name and Message field left empty!");
    }

    if(uName == "" && uEmail != "" && uMessage != "") {
        alert("Name is required!");
    }

    if(uName != "" && uEmail != "" && uMessage != "") {
        alert("Your message was sent successfully!");
    }

}


