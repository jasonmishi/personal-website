function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setDark() {
  document.body.style.setProperty("--bg-col", "#000");
  document.body.style.setProperty("--accent-col", "#fff");
}

function setLight(){
  document.body.style.setProperty("--bg-col", "#fff");
  document.body.style.setProperty("--accent-col", "#000");
}


if (document.cookie.split(';').filter((item) => item.trim().startsWith('theme=')).length) {
  console.log('The cookie "theme" exists (ES6)');
  var theme = getCookie("theme");
  if (theme === "dark") {
    setDark();
  } else if (theme === "light") {
    setLight();
  }
} else {
  document.cookie = "theme=dark";
  console.log(document.cookie);
}

document.getElementsByClassName("theme-toggle-button")[0].addEventListener("click", function() {
  console.log("working");
  if(getCookie("theme") === "dark") {
    document.cookie = "theme=light";
    setLight()
  } else {
    document.cookie = "theme=dark";
    setDark();
  }
});

document.getElementsByClassName("theme-toggle-button")[1].addEventListener("click", function() {
  console.log("working");
  if(getCookie("theme") === "dark") {
    document.cookie = "theme=light";
    setLight()
  } else {
    document.cookie = "theme=dark";
    setDark();
  }
});