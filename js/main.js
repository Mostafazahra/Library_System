let btn = document.getElementById("btn");
let l = document.querySelector(".menu-list");
let login = document.querySelector(".login");
let register = document.querySelector(".register");
let form1=document.getElementById("form1");
let form2=document.getElementById("form2");

btn.onclick = function () {
  if (l.style.transform == "rotateX(90deg)") {
    l.style.transform = "rotateX(0deg)";
  } else {
    l.style.transform = "rotateX(90deg)";
  }
}
login.onclick=function(){
  if(form1.style.display==="none"){
    form1.style.display="flex";
     form2.style.display = "none";
  }else{
       form1.style.display="none"; 
      }
}
register.onclick=function(){
  if(form2.style.display==="none"){
    form2.style.display="flex";
    form1.style.display = "none";

  }else{
       form2.style.display="none"; 
  }
}
 
