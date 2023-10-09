//First get Instance of button in JS from DOM
const btn = document.getElementById("button");


//Now we have to start validation check if only user clicks Login button
btn.addEventListener('click',validateUserName)

//We will validate and check the user name and password in this validate function
function validateUserNameAndPassword(){
    //let's at first get the username
    
    const userName = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    //Check if username is entered
    if(userName == null || userName ==""){
        alert("Please Enter a username")
        return false;
       }
       //If username is entered check if its correct
       else if(userName !== "admin"){
        alert("Your username is not correct")
        return false
    //Check now if password is entered   
    }else if(password == null || password ==""){
    alert("Please Enter a password")
    return false;
    }
    //If password is entered check if its correct
    else if(password !== "heretohelp!456"){
        alert("Your password is not correct")
        return false  
    }
          //if everything is correct entered return true
        return true;
    }
 