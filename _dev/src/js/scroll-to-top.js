window.onscroll = function() {scrollFunction()};

var scrollMin = window.innerHeight * 2;

function scrollFunction() {
  if (document.body.scrollTop > scrollMin || document.documentElement.scrollTop > scrollMin) {
    document.getElementById("backtotop").style.display = "block";
  } else {
    document.getElementById("backtotop").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}