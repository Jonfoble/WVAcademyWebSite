<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="formStyle.css">
    <meta charset="UTF-8">
    <title>WearView Academy IT Technical Support</title>
  </head>
  <body>
    <header>
        <h1 class="title">WearView Academy IT Technical Support</h1>
      </header>
    <div>
    <h1 id="title">Issue Form</h1>
    <p id="description">This system is a prototype to get feedback from you</p>
    
    <form id="survey-form" onsubmit="return validateformElements()" action="submit.php" method="POST">
        <div class="form-group">
           <label id="name-label">Your Name:</label>
           <input name="name" id="name" class="size" type="text" placeholder="Enter Your Name"/>
        </div>
        <div class="form-group">
             <label id="email-label">Your E-Mail:</label>
             <input name="email" id="email" class="size" type="text" placeholder="Enter Your E-Mail"/>
        </div>  
        <div class="form-group">
             <label id="dep-label">Your Department:</label>
             <input id="department" name="department" class="size" type="text" placeholder="Enter Your Department">
        </div>
        <div class="form-group">
            <label id="dropdown-label">Select Your Type of Issue:</label> 
            <select id="dropdown" name="dropdown" >
            <option value="Hardware">Hardware</option>
            <option value="Software">Software</option>
            <option value="Cable Issues">Cable Issues</option>
            <option value="Internet Connection">Internet Connection</option>
              <option value="I am not sure">I am not sure</option>
            </select>
         </div>
         <div class="form-group">
             <p>Did you find the related type of issue on the list?:</p> 
              <label for="radio-yes"> 
                  <input type="radio" id="radio-yes" name="radio-button" value="yes" checked>Yes
              </label>
              <label for="radio-no"> 
                <input type="radio" id="radio-no" name="radio-button" value="no"/>No
           </label>
        </div>
        <div class="form-group"> 
             <p>The Issue:</p>
             <textarea id="textarea" name="textarea" placeholder="Please try to be as specific as you can" rows="4" cols="50"></textarea>
        </div>
        <div class="form-group"> 
            <button id="submit" class="button">Submit</button>          
        </div>
       </form>
    </div>
    <footer>
        <hr class="footer-hr">
        <div id="footer-div">
        <p class="footer-text">Created by Yusuf Emre Guzel</p>
        <p class="footer-text">&copy; WearView Academy 2023</p>
        </div>
      </footer>
      <script src="formValidation.js"></script>
  </body>
</html>
