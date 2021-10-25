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