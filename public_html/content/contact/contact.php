<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Little Chikadee: Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/css/contactForm.css"
    <link rel="shortcut icon" href="/images/favicon.ico" >  
    <script type="text/javascript" src="/content/contact/contactForm.js"></script>
</head> 

<body>
    <header> 
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigationBar.php'; ?>
    </header>
    
    <main>
        <h3>Contact Us</h3>
        <hr class="lightBlue"/>
        <h4>Questions?  Comments?  Let us know!</h4>
        
        <form method="post" action="" id="contactForm" onreset="loadPage()
                    onsubmit="return validateForm();">
            <table>
                <tr>
                    <td>First name:</td>
                    <td><input type="text" id="fName" onblur="validateFName()"></td>
                <td class="error" id="fNameValid">First name required</td>
                </tr>
                <tr>
                    <td>Last name:</td>
                    <td><input type="text" id="lName" onblur="validateLName()"></td>
                    <td class="error" id="lNameValid">
                    Last name required</td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td><input type="text" id="address" onblur="validateAddress()"></td>
                    <td class="error" id="addValid">Address required</td>
                </tr>
                <tr>
                    <td>Zip:</td>
                    <td><input type="text" id="zip" maxlength="5" size="5" onblur="validateZip()"></td>
                    <td class="error" id="zipValid">Zip code required</td>    
                </tr>   
                <tr>
                    <td>Phone:</td>
                    <td>(<input type="text" id="phone1" maxlength="3" size="3">)
                        <input type="text" id="phone2" maxlength="3" size="3">
                    - <input type="text" id="phone3" maxlength="4" size="4" onblur="validatePhone()">
                    </td>
                    <td class="error" id="phoneValid">Full phone number required<br />(000)000-0000</td>
                </tr>
                
                <tr>
                    <td>Message:</td>
                    <td class="error" id="noMsg">Message cannot be blank!</td>
                </tr>
            </table>
                    
            <textarea name="message" id="message" rows="10" cols="30" 
                      onblur="validateMessage()" placeholder="Type message here">
            </textarea>
                                        
            <div style="text-align:center">
                <input type="submit" value="Send" onclick="return validateForm()"/>
                <input type="reset" value="Cancel" />
          </div>
        </form>
        
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>  
    </footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/copyright.php'; ?>  
  </body>
</html>