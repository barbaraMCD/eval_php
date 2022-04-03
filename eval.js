const form = document.getElementById("form_adm");
const adm = document.getElementById("adm");
const main = document.getElementsByTagName("main")[0];

adm.addEventListener("click", function () {
form.style.display = "flex";
main.style.zIndex = "0";
form.style.zIndex = "1";
main.style.opacity = "50%";

main.addEventListener("click", function () {
  form.style.display = "none";
  main.style.opacity = "100%";
  })
})

