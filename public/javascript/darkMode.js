const darkModeBtn = document.querySelector("#darkMode");
const isDarkModeStored = localStorage.getItem("darkMode");
let stateDarkMode = isDarkModeStored;

function setUpDarkMode(bool) {
  if (bool) {
    document.body.classList.add("darkMode");
  } else {
    document.body.classList.remove("darkMode");
  }
  stateDarkMode = bool;
  darkModeBtn.checked = bool;
}

if (isDarkModeStored != null) {
  if (isDarkModeStored === "true") {
    setUpDarkMode(true);
    console.log("dark");
  } else {
    setUpDarkMode(false);
    console.log("pas dark");
    colorGoingLight();
  }
} else {
  localStorage.setItem("darkMode", false);
  setUpDarkMode(false);
}

function toggleDarkMode() {
  document.body.classList.toggle("darkMode");
  stateDarkMode = !stateDarkMode;
  localStorage.setItem("darkMode", stateDarkMode);
  darkModeBtn.checked = stateDarkMode;
  if (stateDarkMode) {
    console.log("dark");
    colorGoingDark()
  } else {
    console.log("pas dark");
    colorGoingLight()
  }
}

darkModeBtn.addEventListener("change", toggleDarkMode);

function colorGoingDark() {
  document.documentElement.style.setProperty("--bg_1", "#181118");
  document.documentElement.style.setProperty("--bg_2", "#201320");
  document.documentElement.style.setProperty("--components_1", "#351a35");
  document.documentElement.style.setProperty("--components_2", "#451d47");
  document.documentElement.style.setProperty("--components_3", "#512454");
  document.documentElement.style.setProperty("--boder_1", "#5e3061");
  document.documentElement.style.setProperty("--boder_2", "#734079");
  document.documentElement.style.setProperty("--boder_3", "#92549c");
  document.documentElement.style.setProperty("--solid_1", "#ab4aba");
  document.documentElement.style.setProperty("--solid_2", "#b658c4");
  document.documentElement.style.setProperty("--text_1", "#e796f3");
  document.documentElement.style.setProperty("--text_2", "#f4d4f4");
  document.documentElement.style.setProperty("--overlay", "#f1f1f190");
  document.documentElement.style.setProperty("--shadow_1", "#333333");
}
function colorGoingLight() {
  document.documentElement.style.setProperty("--bg_1", "#fefcff");
  document.documentElement.style.setProperty("--bg_2", "#fdf7fd");
  document.documentElement.style.setProperty("--components_1", "#fbebfb");
  document.documentElement.style.setProperty("--components_2", "#f7def8");
  document.documentElement.style.setProperty("--components_3", "#f2d1f3");
  document.documentElement.style.setProperty("--boder_1", "#e9c2ec");
  document.documentElement.style.setProperty("--boder_2", "#deade3");
  document.documentElement.style.setProperty("--boder_3", "#cf91d8");
  document.documentElement.style.setProperty("--solid_1", "#ab4aba");
  document.documentElement.style.setProperty("--solid_2", "#a144af");
  document.documentElement.style.setProperty("--text_1", "#953ea3");
  document.documentElement.style.setProperty("--text_2", "#53195d");
  document.documentElement.style.setProperty("--overlay", "#33333390");
  document.documentElement.style.setProperty("--shadow_1", "#f1f1f1");
}
