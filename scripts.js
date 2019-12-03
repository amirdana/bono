$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});
window.addEventListener("scroll", () => {
  if (window.scrollY >= 1) {
    document.querySelector(".navi").style.backgroundColor =
      "rgba(248, 249, 249, 0.9)";

    document.querySelector(".navi").querySelector("h1").style.color = "#414d58";
    document.querySelector(".navi").querySelector("ul").style.color = "black";
  }
  if (window.scrollY <= 1) {
    document.querySelector(".navi").style.backgroundColor =
      "rgba(255, 255, 255, 0.001)";

    document.querySelector(".navi").querySelector("h1").style.color = "white";
    document.querySelector(".navi").querySelector("ul").style.color = "white";
  }
});

setInterval(() => {
  let btn = document.getElementById("call-to").style;

  if (btn.backgroundColor == "white") {
    btn.backgroundColor = "rgba(255, 255, 255, 0.007)";
    btn.color = "white";
  } else {
    btn.backgroundColor = "white";
    btn.color = "black";
  }
}, 1500);
