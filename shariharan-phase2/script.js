let clearbtn = document.getElementById('clearbtn');

function confirmStatus(e){
    console.log('Confirm Button Clicked')
    titlebox.style.borderColor = '';
    msgbox.style.borderColor = '';
    let choice = window.confirm("Are you sure");
    if(choice == false){
        e.preventDefault();
    }
}

clearbtn.addEventListener('click' , confirmStatus);

let submitbtn = document.getElementById('submitbtn');

let titlebox = document.forms["blogForm"]["title"];
let msgbox = document.forms["blogForm"]["messagebox"];

function preventSubmit(e) {

    let titleValue = document.forms["blogForm"]["title"].value;
    let msgValue = document.forms["blogForm"]["messagebox"].value;

    if (titleValue == "" && msgValue == "") {
        titlebox.style.borderColor = 'red';
        msgbox.style.borderColor = 'red';
        window.alert("Empty Fields");
        e.preventDefault();
    }

    else if(titleValue == ""){
        titlebox.style.borderColor = 'red';
        msgbox.style.borderColor = '';
        window.alert("Title Field Empty");
        e.preventDefault();
    }

    else if(msgValue == ""){
        msgbox.style.borderColor = 'red';
        titlebox.style.borderColor = '';
        window.alert("Message Field Empty");
        e.preventDefault();
    }

    else{
        window.alert("Post Successfully Uploaded");
    }
}

submitbtn.addEventListener('click', preventSubmit)