//Menu
const btnMenu = document.getElementById('btn_menu');
const menuItems = document.getElementById('menu_items');
const itemsResponsive = document.getElementById('menu_items_responsive');
const template = `
                <a class="menu-item active" id="home_short">
                    <span class="material-icons">home</span>
                    <p class="op_menu">Inicio</p>
                </a>
                <a class="menu-item active" href="#menu">
                    <span class="material-icons">restaurant_menu</span>
                    <p class="op_menu">Menú</p>
                </a>
                <a class="menu-item active" href="#reviews">
                    <span class="material-icons">reviews</span>
                    <p class="op_menu">Reseñas</p>
                </a>
                `;
let status = 0;
btnMenu.addEventListener("click", () => {   
    if(status == 0){
    itemsResponsive.style.display = "block";
    status = 1;
    }else{
        itemsResponsive.style.display = "none";
        status = 0;
    }
});

function loadItems() {
    menuItems.innerHTML = template;
    itemsResponsive.innerHTML = template;
}

loadItems();

//Inicio
const principalScreen = document.getElementById('home');
principalScreen.addEventListener('click', () => {
    window.location.pathname = '';
    
});

const principalScreenshort = document.getElementById('home_short');
principalScreenshort.addEventListener('click', () => {
    window.location.pathname = '';
    
});

//Cambio de texto
function changeText(arrayTexto) {
    setInterval(() => {
      document.getElementById("search").placeholder = arrayTexto[Math.floor(Math.random() * arrayTexto.length)];
    }, 5000);
  }
  
let textos = ["¿Buscas desayunos, almuerzos, cena o un postrecito?", "¿De que tienes antojo?", "¿Buscas algo en especifico?", "¿Que deseas comer?", "¿Buscas algún restaurante?", "Anímate a buscar lo que desees"];
changeText(textos);

//Cerrar popup
closePopup = document.getElementById('close');
closePopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

//Cerrar contenedor busqueda
closeSearch = document.getElementById('close_search');
overlay_search = document.getElementById('overlay_search');
popup_search = document.getElementById('popup_search');
closeSearch.addEventListener('click', function(e){
	e.preventDefault();
	overlay_search.classList.remove('active');
	popup_search.classList.remove('active');
});

//Cerrar panel de escritura
close_review = document.getElementById('close_review');
overlay_review = document.getElementById('overlay_review');
popup_review = document.getElementById('popup_review');
close_review.addEventListener('click', function(e){
	e.preventDefault();
	overlay_review.classList.remove('active');
	popup_review.classList.remove('active');
});

//AJAX
$(document).ready(function() {
    //Search
    $('#search').keyup(function () {
        if ($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: 'modules/search.php',
                data: { search },
                type: 'POST',
                success: function(query) {
                    if (!response.error) {
                        $('#response').html(query);
                        $('#overlay_search').addClass('active');
                        $('#popup_search').addClass('active');
                        //Cerrar pestaña de busqueda cuando se vea el producto
                        closeCategory = document.getElementById('categ');
                        closeCategory.addEventListener('click', function (e) {
                            e.preventDefault();
                            overlay_search.classList.remove('active');
	                        popup_search.classList.remove('active');
                            window.location = (closeCategory.getAttribute('href'));
                        });
                    }
                }
            })
        }
    });
});
