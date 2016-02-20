function loadPage()
{
    document.getElementById('fName').focus();
    document.getElementById('total').innerHTML = ("0.00");
}


/**Validation functions return FALSE if the input is INVALID
*  TRUE if the input is VALID
*/
 function validateFName()
 {
    if (document.getElementById('fName').value == "")
    {
        document.getElementById('fNameValid').style.display = "block";
         return false;
    }
    else
    {
        document.getElementById('fNameValid').style.display = "none";
         return true;     
     }
}


         function validateLName()
         {
         if (document.getElementById('lName').value == "")
         {
         document.getElementById('lNameValid').style.display = "block";
         return false;
         }
         else
         {
         document.getElementById('lNameValid').style.display = "none";
         return true; document.getElementById('lNameValid').style.display = "none";
         return true;
         }
         }
        
function validateAddress()
{
    if (document.getElementById('address').value == "")
    {
        document.getElementById('addValid').style.display = "block";
        return false;
    }
    else
    {
        document.getElementById('addValid').style.display = "none";
        return true;
    }
}

function vaildateMessage(){
    if(document.getElementById('message').value=="")
    {
        document.getElementById('noMsg').style.display = "block;"
        return false;
    }
    else
    {
        document.getElementById('noMsg').style.display = "none";
        return true;
    }      
}

function vaildateCaptcha(){
    if(document.getElementById('captcha').value=="")
    {
        document.getElementById('noCaptcha').style.display = "block;"
        return false;
    }
    else if(document.getElementById('captcha').value!="red")
    {
        document.getElementById('noCaptcha').style.display = "block;"
        return false;
    }
    else
    {
        document.getElementById('noCaptcha').style.display = "none";
        return true;
    }      
}
         function validateZip()
         {
         if (document.getElementById('zip').value == "")
         {
         document.getElementById('zipValid').style.display = "block";
         return false;
         }
         else
         {
         document.getElementById('zipValid').style.display = "none";
         return true;
         }
         }

         function validatePhone()
         {
         var area = document.getElementById('phone1').value;
         var part1 = document.getElementById('phone2').value;
         var part2 = document.getElementById('phone3').value;

         if (area == "" || part1 == "" || part2 == ""
         || area.length != 3 || part1.length !=3 || part2.length != 4)//make su\re we have all 10 digits
{
         document.getElementById('phoneValid').style.display = "block";
         return false;
         }
         else
         {
         document.getElementById('phoneValid').style.display = "none";
         return true;
         }
         }
         
         

function validateForm()
{
    var field = "";

    if (!validateFName())
        field = "fName";
    else if (!validateLName())
        field = "lName";
    else if (!validateAddress())
        field = "address";
    else if (!validateZip())
        field = "zip";
    else if (!validatePhone())
        field = "phone1";
    else if (!validateMessage())   
        field = "message";
        
    else
    {
        alert("VALIDATE 2");
        document.write("Order Submitted");
        return true;
    }
}