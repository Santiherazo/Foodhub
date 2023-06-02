//Ofertas
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper a");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return;
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return;
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);





//Novedades
const wrapper_new = document.querySelector(".wrapper_new");
const carousel_new = document.querySelector(".carousel_new");
const firstCardWidth_new = carousel_new.querySelector(".card_new").offsetWidth;
const arrowBtns_new = document.querySelectorAll(".wrapper_new a");
const carouselChildrens_new = [...carousel_new.children];

let isDragging_new = false, isAutoPlay_new = true, startX_new, startScrollLeft_new, timeoutId_new;

let cardPerView_new = Math.round(carousel_new.offsetWidth / firstCardWidth_new);

carouselChildrens_new.slice(-cardPerView_new).reverse().forEach(card_new => {
    carousel_new.insertAdjacentHTML("afterbegin", card_new.outerHTML);
});

carouselChildrens_new.slice(0, cardPerView_new).forEach(card_new => {
    carousel_new.insertAdjacentHTML("beforeend", card_new.outerHTML);
});

carousel_new.classList.add("no-transition");
carousel_new.scrollLeft = carousel_new.offsetWidth;
carousel_new.classList.remove("no-transition");

arrowBtns_new.forEach(btn_new => {
    btn_new.addEventListener("click", () => {
        carousel_new.scrollLeft += btn_new.id == "left" ? -firstCardWidth_new : firstCardWidth_new;
    });
});

const dragStart_new = (e) => {
    isDragging_new = true;
    carousel_new.classList.add("dragging_new");
    startX_new = e.pageX_new;
    startScrollLeft_new = carousel_new.scrollLeft;
}

const dragging_new = (e) => {
    if(!isDragging_new) return;
    carousel_new.scrollLeft = startScrollLeft_new - (e.pageX_new - startX_new);
}

const dragStop_new = () => {
    isDragging_new = false;
    carousel_new.classList.remove("dragging_new");
}

const infiniteScroll_new = () => {
    if(carousel_new.scrollLeft === 0) {
        carousel_new.classList.add("no-transition");
        carousel_new.scrollLeft = carousel_new.scrollWidth - (2 * carousel_new.offsetWidth);
        carousel_new.classList.remove("no-transition");
    }
    
    else if(Math.ceil(carousel_new.scrollLeft) === carousel_new.scrollWidth - carousel_new.offsetWidth) {
        carousel_new.classList.add("no-transition");
        carousel_new.scrollLeft = carousel_new.offsetWidth;
        carousel_new.classList.remove("no-transition");
    }

    clearTimeout(timeoutId_new);
    if(!wrapper_new.matches(":hover")) autoPlay_new();
}

const autoPlay_new = () => {
    if(window.innerWidth < 800 || !isAutoPlay_new) return;
    timeoutId_new = setTimeout(() => carousel_new.scrollLeft += firstCardWidth_new, 2500);
}
autoPlay_new();

carousel_new.addEventListener("mousedown", dragStart_new);
carousel_new.addEventListener("mousemove", dragging_new);
document.addEventListener("mouseup", dragStop_new);
carousel_new.addEventListener("scroll", infiniteScroll_new);
wrapper_new.addEventListener("mouseenter", () => clearTimeout(timeoutId_new));
wrapper_new.addEventListener("mouseleave", autoPlay_new);





//Destacados
const wrapper_out = document.querySelector(".wrapper_out");
const carousel_out = document.querySelector(".carousel_out");
const firstCardWidth_out = carousel_out.querySelector(".card_out").offsetWidth;
const arrowBtns_out = document.querySelectorAll(".wrapper_new out");
const carouselChildrens_out = [...carousel_out.children];

let isDragging_out = false, isAutoPlay_out = true, startX_out, startScrollLeft_out, timeoutId_out;

let cardPerView_out = Math.round(carousel_out.offsetWidth / firstCardWidth_out);

carouselChildrens_out.slice(-cardPerView_out).reverse().forEach(card_out => {
    carousel_out.insertAdjacentHTML("afterbegin", card_out.outerHTML);
});

carouselChildrens_out.slice(0, cardPerView_out).forEach(card_out => {
    carousel_out.insertAdjacentHTML("beforeend", card_out.outerHTML);
});

carousel_out.classList.add("no-transition");
carousel_out.scrollLeft = carousel_out.offsetWidth;
carousel_out.classList.remove("no-transition");

arrowBtns_out.forEach(btn_out => {
    btn_out.addEventListener("click", () => {
        carousel_out.scrollLeft += btn_out.id == "left" ? -firstCardWidth_out : firstCardWidth_out;
    });
});

const dragStart_out = (e) => {
    isDragging_out = true;
    carousel_out.classList.add("dragging_out");
    startX_out = e.pageX_out;
    startScrollLeft_out = carousel_out.scrollLeft;
}

const dragging_out = (e) => {
    if(!isDragging_out) return;
    carousel_out.scrollLeft = startScrollLeft_out - (e.pageX_out - startX_out);
}

const dragStop_out = () => {
    isDragging_out = false;
    carousel_out.classList.remove("dragging_out");
}

const infiniteScroll_out = () => {
    if(carousel_out.scrollLeft === 0) {
        carousel_out.classList.add("no-transition");
        carousel_out.scrollLeft = carousel_out.scrollWidth - (2 * carousel_out.offsetWidth);
        carousel_out.classList.remove("no-transition");
    }
    
    else if(Math.ceil(carousel_out.scrollLeft) === carousel_out.scrollWidth - carousel_out.offsetWidth) {
        carousel_out.classList.add("no-transition");
        carousel_out.scrollLeft = carousel_out.offsetWidth;
        carousel_out.classList.remove("no-transition");
    }

    clearTimeout(timeoutId_out);
    if(!wrapper_out.matches(":hover")) autoPlay_out();
}

const autoPlay_out = () => {
    if(window.innerWidth < 800 || !isAutoPlay_out) return;
    timeoutId_out = setTimeout(() => carousel_out.scrollLeft += firstCardWidth_out, 2500);
}
autoPlay_out();

carousel_out.addEventListener("mousedown", dragStart_out);
carousel_out.addEventListener("mousemove", dragging_out);
document.addEventListener("mouseup", dragStop_out);
carousel_out.addEventListener("scroll", infiniteScroll_out);
wrapper_out.addEventListener("mouseenter", () => clearTimeout(timeoutId_out));
wrapper_out.addEventListener("mouseleave", autoPlay_out);





//Productos
const wrapper_prod = document.querySelector(".wrapper_prod");
const carousel_prod = document.querySelector(".carousel_prod");
const firstCardWidth_prod = carousel_prod.querySelector(".card_prod").offsetWidth;
const arrowBtns_prod = document.querySelectorAll(".wrapper_prod a");
const carouselChildrens_prod = [...carousel_prod.children];

let isDragging_prod = false, isAutoPlay_prod = true, startX_prod, startScrollLeft_prod, timeoutId_prod;

let cardPerView_prod = Math.round(carousel_prod.offsetWidth / firstCardWidth_prod);

carouselChildrens_prod.slice(-cardPerView_prod).reverse().forEach(card_prod => {
    carousel_prod.insertAdjacentHTML("afterbegin", card_prod.outerHTML);
});

carouselChildrens_prod.slice(0, cardPerView_prod).forEach(card_prod => {
    carousel_prod.insertAdjacentHTML("beforeend", card_prod.outerHTML);
});

carousel_prod.classList.add("no-transition");
carousel_prod.scrollLeft = carousel_prod.offsetWidth;
carousel_prod.classList.remove("no-transition");

arrowBtns_prod.forEach(btn_prod => {
    btn_prod.addEventListener("click", () => {
        carousel_prod.scrollLeft += btn_prod.id == "left" ? -firstCardWidth_prod : firstCardWidth_prod;
    });
});

const dragStart_prod = (e) => {
    isDragging_prod = true;
    carousel_prod.classList.add("dragging_prod");
    startX_prod = e.pageX_prod;
    startScrollLeft_prod = carousel_prod.scrollLeft;
}

const dragging_prod = (e) => {
    if(!isDragging_prod) return;
    carousel_prod.scrollLeft = startScrollLeft_prod - (e.pageX_prod - startX_prod);
}

const dragStop_prod = () => {
    isDragging_prod = false;
    carousel_prod.classList.remove("dragging_prod");
}

const infiniteScroll_prod = () => {
    if(carousel_prod.scrollLeft === 0) {
        carousel_prod.classList.add("no-transition");
        carousel_prod.scrollLeft = carousel_prod.scrollWidth - (2 * carousel_prod.offsetWidth);
        carousel_prod.classList.remove("no-transition");
    }
    
    else if(Math.ceil(carousel_prod.scrollLeft) === carousel_prod.scrollWidth - carousel_prod.offsetWidth) {
        carousel_prod.classList.add("no-transition");
        carousel_prod.scrollLeft = carousel_prod.offsetWidth;
        carousel_prod.classList.remove("no-transition");
    }

    clearTimeout(timeoutId_prod);
    if(!wrapper_prod.matches(":hover")) autoPlay_prod();
}

const autoPlay_prod = () => {
    if(window.innerWidth < 800 || !isAutoPlay_prod) return;
    timeoutId_prod = setTimeout(() => carousel_prod.scrollLeft += firstCardWidth_prod, 2500);
}
autoPlay_prod();

carousel_prod.addEventListener("mousedown", dragStart_prod);
carousel_prod.addEventListener("mousemove", dragging_prod);
document.addEventListener("mouseup", dragStop_prod);
carousel_prod.addEventListener("scroll", infiniteScroll_prod);
wrapper_prod.addEventListener("mouseenter", () => clearTimeout(timeoutId_prod));
wrapper_prod.addEventListener("mouseleave", autoPlay_prod);





//Postres
const wrapper_des = document.querySelector(".wrapper_des");
const carousel_des = document.querySelector(".carousel_des");
const firstCardWidth_des = carousel_des.querySelector(".card_des").offsetWidth;
const arrowBtns_des = document.querySelectorAll(".wrapper_des a");
const carouselChildrens_des = [...carousel_des.children];

let isDragging_des = false, isAutoPlay_des = true, startX_des, startScrollLeft_des, timeoutId_des;

let cardPerView_des = Math.round(carousel_des.offsetWidth / firstCardWidth_des);

carouselChildrens_des.slice(-cardPerView_des).reverse().forEach(card_des => {
    carousel_des.insertAdjacentHTML("afterbegin", card_des.outerHTML);
});

carouselChildrens_des.slice(0, cardPerView_des).forEach(card_des => {
    carousel_des.insertAdjacentHTML("beforeend", card_des.outerHTML);
});

carousel_des.classList.add("no-transition");
carousel_des.scrollLeft = carousel_des.offsetWidth;
carousel_des.classList.remove("no-transition");

arrowBtns_des.forEach(btn_des => {
    btn_des.addEventListener("click", () => {
        carousel_des.scrollLeft += btn_des.id == "left" ? -firstCardWidth_des : firstCardWidth_des;
    });
});

const dragStart_des = (e) => {
    isDragging_des = true;
    carousel_des.classList.add("dragging_des");
    startX_des = e.pageX_des;
    startScrollLeft_des = carousel_des.scrollLeft;
}

const dragging_des = (e) => {
    if(!isDragging_des) return;
    carousel_des.scrollLeft = startScrollLeft_des - (e.pageX_des - startX_des);
}

const dragStop_des = () => {
    isDragging_des = false;
    carousel_des.classList.remove("dragging_des");
}

const infiniteScroll_des = () => {
    if(carousel_des.scrollLeft === 0) {
        carousel_des.classList.add("no-transition");
        carousel_des.scrollLeft = carousel_des.scrollWidth - (2 * carousel_des.offsetWidth);
        carousel_des.classList.remove("no-transition");
    }
    
    else if(Math.ceil(carousel_des.scrollLeft) === carousel_des.scrollWidth - carousel_des.offsetWidth) {
        carousel_des.classList.add("no-transition");
        carousel_des.scrollLeft = carousel_des.offsetWidth;
        carousel_des.classList.remove("no-transition");
    }

    clearTimeout(timeoutId_des);
    if(!wrapper_des.matches(":hover")) autoPlay_des();
}

const autoPlay_des = () => {
    if(window.innerWidth < 800 || !isAutoPlay_des) return;
    timeoutId_des = setTimeout(() => carousel_des.scrollLeft += firstCardWidth_des, 2500);
}
autoPlay_des();

carousel_des.addEventListener("mousedown", dragStart_des);
carousel_des.addEventListener("mousemove", dragging_des);
document.addEventListener("mouseup", dragStop_des);
carousel_des.addEventListener("scroll", infiniteScroll_des);
wrapper_des.addEventListener("mouseenter", () => clearTimeout(timeoutId_des));
wrapper_des.addEventListener("mouseleave", autoPlay_des);