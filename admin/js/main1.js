let In = document.querySelector(".insert");
let Up = document.querySelector(".update");
let De = document.querySelector(".delete");
let Ho = document.querySelector(".home");
let lo = document.querySelector(".logout");
In.onclick = () => {window.open("http://localhost/newproject/php/insertbook.php","_parent");};
Up.onclick = ()=>{window.open("http://localhost/newproject/php/updatebook.php", "_parent");};
De.onclick = ()=>{window.open("http://localhost/newproject/php/deletebook.php", "_parent");};
Ho.onclick = ()=>{window.open("http://localhost/newproject/php/homeadmin.php", "_parent");};
lo.onclick = () => {window.open("http://localhost/newproject/php/login&register.php", "_parent");};