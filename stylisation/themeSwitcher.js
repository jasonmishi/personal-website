function setDark() {
  document.body.style.setProperty("--bg-col", "#000");
  document.body.style.setProperty("--accent-col", "#fff");

  document.body.style.setProperty("--blue-txt-color", "aqua");
  document.body.style.setProperty("--text-bg-col", "initial");
  localStorage.setItem("jasonlk-theme", "dark");
}

function setLight(){
  document.body.style.setProperty("--bg-col", "#fff");
  document.body.style.setProperty("--accent-col", "#000");
  
  document.body.style.setProperty("--blue-txt-color", "rgb(0, 17, 255)");

  if (window.matchMedia("(max-width: 768px)").matches) {
    document.body.style.setProperty("--project-small-txt", "aliceblue");
  }
  document.body.style.setProperty("--text-bg-col", "#fff");
  localStorage.setItem("jasonlk-theme", "light");
}

if (typeof(Storage) !== "undefined") {
  if (localStorage.getItem("jasonlk-theme") == null) {
    setDark();
  } else if (localStorage.getItem("jasonlk-theme") == "light") {
    setLight();
  } else {
    setDark();
  }
} else {
  $(".theme-toggle-button").hide();
}

document.getElementsByClassName("theme-toggle-button")[0].addEventListener("click", function() {
  if(localStorage.getItem("jasonlk-theme") === "dark") {
    setLight()
  } else {
    setDark();
  }
});

document.getElementsByClassName("theme-toggle-button")[1].addEventListener("click", function() {
  if(localStorage.getItem("jasonlk-theme") === "dark") {
    setLight()
  } else {
    setDark();
  }
});
