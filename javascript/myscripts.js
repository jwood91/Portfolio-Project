var app = document.getElementById('app1');

var typewriter = new Typewriter(app, {
  loop: false,
  delay: 75,
});

typewriter
  .pauseFor(1000)
  .typeString('My Name Is Joe Wood')
  .pauseFor(1500)
  .typeString('<br>I am a Web Developer'.fontsize(4.9))
  .start();



  var app = document.getElementById('app2');

  var typewriter = new Typewriter(app, {
    loop: false,
    delay: 75,
  });

  typewriter
    .typeString("Hello, I'm Joe")
    .start();

function toggleNav(){
  if ($(`#main-content`).hasClass('isOpen')) {
    $(`#main-content`).addClass('isClosed').removeClass('isOpen');
    $(`#mobile-nav`).addClass('isClosed').removeClass('isOpen');
  } else {
  $(`#main-content`).addClass('isOpen').removeClass('isClosed');
  $(`#mobile-nav`).addClass('isOpen').removeClass('isClosed');
  };
};

function sideNavHide() {
  if ($(`#main-content`).hasClass('isOpen')) {
    $(`#main-content`).addClass('isClosed');
    $(`#mobile-nav`).addClass('isClosed').removeClass('isOpen');
  };
}


function submitMessage() {
    const regex = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/
    let emailInput = $('#email').val()
    let validEmail = false;
    let firstName = $(`#firstname`)
    let lastName = $(`#lastname`)
    let subject = $(`#subject`)

    if (emailInput.match(regex)) {
      console.log('email validated');
      validEmail = true;

      $(`#email`).addClass('valid-email').removeClass('invalid-email')
    } else {
      console.log('email invalid');
      alert('Please enter a valid email address')
      $(`#email`).addClass('invalid-email').removeClass('valid-email')
    }


};

$('#form').submit(function() {
if ($.trim($("#email").val()) === "" || $.trim($("#firstname").val()) === "" || $.trim($("#lastname").val()) === "" || $.trim($("#subject").val()) === "") {
    alert('You did not fill out one or more of the fields');
    return false;
}
});
