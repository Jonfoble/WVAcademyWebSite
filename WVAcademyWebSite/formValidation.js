//First get Instance of button in JS from DOM
const btn = document.getElementById("button");


//Now we have to start validation check if only user clicks Login button
btn.addEventListener('click',validateUserName)

//We will validate form elements
function validateformElements(){
    
   
    //let's at first get the values of form elements
    
    const userName = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const userDepertmant = document.getElementById("department").value;
    const userIssue = document.getElementById("textarea").value;
    
    //Check if username is entered
    console.log("1")
    if(userName == null || userName ==""){
        alert("Please Enter a Name")
        return false;
       }else if(email == null || email ==""){
        alert("Please Enter an E-mail")
        return false;
        //If email is entered check if its correct entered
       }else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))){
        alert("Please Enter a correct e-mail address")
        return false;
       }
       //Check if user department is entered
       else if(userDepertmant == null || userDepertmant ==""){
        alert("Please Enter a Department")
        return false;
        //check if user issue is entered
       }else if(userIssue == null || userIssue ==""){
        alert("Please Enter an Issue")
        return false;
       }else{
        return true
            }
}




