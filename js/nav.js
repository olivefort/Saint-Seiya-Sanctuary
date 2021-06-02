const toggleMenu = document.querySelector('.main-nav button');
const menu = document.querySelector('#main-menu');

toggleMenu.addEventListener('click', function() {
  const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
  toggleMenu.setAttribute('aria-expanded', !open);
  menu.hidden = !menu.hidden;
});








// const linkimg = test.children[0].src;
// imgtest.src = linkimg;
// modal.appendChild(imgtest);

//fonction de création de la modale
// function createModal(){
//   const modale = document.createElement('div');
//   modale.id = "myModale";
//   modale.className = "modale";
//   modal.appendChild(modale);
// }
//fonction de récupération de l'image
// function getImg(){
//   const test = document.getElementById('test');
//   console.log(test);
//   const linkimg = test.children[0].src;
//   console.log(linkimg);
//   displayImg(linkimg);
// }
//fonction d'insertion de l'image dans la modale
// function displayImg(srcImg){
//   const imgModal = document.getElementById('myModale');
//   const imgmod = document.createElement('img');
//   imgmod.className = "imgversion";
//   imgModal.appendChild(imgmod);
//   imgmod.src = srcImg
// }

const modal = document.getElementsByClassName('modal');
const btn = document.getElementsByClassName('btn');
const closed = document.getElementsByClassName('close');

console.log(btn.length);

for (let i=0;i<btn.length;i++){
  btn[i].addEventListener('click', (ev) => {
  modal[i].style.display = 'block';
  //document.getElementById('armor').style.display = 'none';
  ev.preventDefault();
  });
  closed[i].addEventListener('click', (ev) => {
    modal[i].style.display = 'none';
    //document.getElementById('armor').style.display = 'none';
    ev.preventDefault();
  });
}
  // window.onclick = function(ev) {
  //   if (ev.target == modal[i]) {
  //     modal[i].style.display = "none";
      // document.getElementById('armor').style.display = 'block';
      //document.getElementById("myModale").textContent = "";
//     }
//   }
// }
//évènement pour ouvrir la modale
// btn.addEventListener('click', (ev) => {
//   modal.style.display = 'block';
//   //document.getElementById('armor').style.display = 'none';
//   ev.preventDefault();
// })

//évènement pour fermer la modale

