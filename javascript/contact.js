const form = document.querySelector('#contact-form');



let firstName = document.querySelector("input[name=first-name]");
let lastName = document.querySelector("input[name=last-name]");
let email = document.querySelector("input[name=email]");
let subject = document.querySelector("input[name=subject]");
let message = document.querySelector("textarea[name=message");



const emailReg = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

firstName.addEventListener('input', validate);
lastName.addEventListener('input', validate);
email.addEventListener('input', validate);
subject.addEventListener('input', validate);
message.addEventListener('input', validate);

let formValid = false;
let success = document.getElementById("contact-success");
let messageFail = document.getElementById("message-fail");

form.addEventListener('submit', function(e) {
    //message length validation
    if (message.value.length <= 5) {
      message.classList.remove('input-area');
      message.classList.add('input-invalid');
      messageFail.classList.add("alert-show");
      messageFail.classList.remove("alert-hide");
      success.classList.add("alert-hide")
      e.preventDefault();
    } else {
      message.classList.add('input-area');
      message.classList.remove('input-invalid');
      messageFail.classList.remove("alert-show");
      messageFail.classList.add("alert-hide");
  
    }
    if (firstName.value.length == 0) {
        firstName.classList.remove('input-area');
        firstName.classList.add('input-invalid');
        formValid = false;
      } else {
        formValid = true;
      }
      
    if(lastName.value.length == 0) {
        lastName.classList.remove('input-area');
        lastName.classList.add('input-invalid');
        formValid = false;
      } else {
        formValid = true;
      }
      
    if(subject.value.length == 0) {
        subject.classList.remove('input-area');
        subject.classList.add('input-invalid');
        formValid = false;
      } else {
        formValid = true;
      }


    if (email.value.length == 0) {
        email.classList.remove('input-area');
        email.classList.add('input-invalid');
        formValid = false;
         } else {
             formValid = true;
         }


    if (emailReg.test(email.value)) {
        email.classList.add('input-area');
        email.classList.remove('input-invalid');
        formValid = true;
    } else {
            formValid = false;
          }


  
    if (formValid == false) {
        e.preventDefault();
    } else {
        var dataString = $(this).serialize();
        e.preventDefault();
        // alert(dataString); return false;
        $.ajax({
            type: "POST",
            url: "inc/function.php",
            data: dataString,
            success: function() {
                $(`#contact-success`).removeClass('alert-hide').addClass('alert-display');
                
              }

             
      
            });
            
        }
    
  });
  
  


//Validate upon typing.

function validate (e) {
  // console.log(e.target.name);

  let target = e.target;

  if(target.name == 'first-name' || 'last-name'){
    // name validation
    if (target.value.length == 0) {
      target.classList.remove('input-area');
      target.classList.add('input-invalid');
      formValid = false;
    } else {
      target.classList.add('input-area');
      target.classList.remove('input-invalid');
      formValid = true;

    }
  }
  if(target.name == 'email'){
    // email validation
    if (emailReg.test(target.value)) {
      target.classList.add('input-area');
      target.classList.remove('input-invalid');
      formValid = true;

    } else {
      target.classList.remove('input-area');
      target.classList.add('input-invalid');
      formValid = false;
    }
  }

  if(target.name == 'subject'){
    // subject field
    if (target.value.length == 0) {
      target.classList.remove('input-area');
      target.classList.add('input-invalid');
      formValid = false;
    } else {
      target.classList.add('input-area');
      target.classList.remove('input-invalid');
      formValid = true;

    }
  }
  if(target.name == 'message'){
    //message field
    if (target.value.length <= 5) {
      target.classList.remove('input-area');
      target.classList.add('input-invalid');
      formValid = false;
    } else {
      target.classList.add('input-area');
      target.classList.remove('input-invalid');
      formValid = true;
    }
  }

};


const exitButton = document.getElementsByClassName("close-button");

function closeSubmit() {
let item = event.target.parentNode;
// console.log(item);
item.classList.remove("alert-show")
item.classList.add("alert-hide")
}