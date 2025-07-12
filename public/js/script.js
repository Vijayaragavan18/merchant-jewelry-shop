




function display() {
    const sec = document.querySelector(".sec");
    const Min = document.querySelector(".Min");
    const hour = document.querySelector(".Hour");
    const day = document.querySelector(".day");

    const upcomingDate = new Date('April 17, 2027 12:02:00');
    const currentDate = new Date();
    const diff = upcomingDate - currentDate;

    if (diff <= 0) {
        sec.innerHTML = "00";
        Min.innerHTML = "00";
        hour.innerHTML = "00";
        day.innerHTML = "00";
        return;
    }

    const totalSeconds = Math.floor(diff / 1000);
    const days = Math.floor(totalSeconds / (60 * 60 * 24));
    const hours = Math.floor((totalSeconds % (60 * 60 * 24)) / (60 * 60));
    const minutes = Math.floor((totalSeconds % (60 * 60)) / 60);
    const seconds = totalSeconds % 60;

    day.innerHTML = zero(days);
    hour.innerHTML = zero(hours);
    Min.innerHTML = zero(minutes);
    sec.innerHTML = zero(seconds);

    function zero(num) {
        return num < 10 ? `0${num}` : num;
    }
}

setInterval(display, 1000);

// ---------input search-------------

const icon = document.querySelector('.searchIcon');
const search = document.querySelector('.inputSearch');
icon.addEventListener('mouseover', (e) => {
    e.preventDefault();

    search.classList.add('add');
    // search.style.transition = "all 1s";
    search.classList.remove('inputSearch');

});

//* ---------gender-------------


const images = document.querySelectorAll(".imageGender");
const details = document.querySelectorAll(".bottomScroll_section");
const gen = document.querySelectorAll(".genderScroll img");

// Store selected gender src per index
const selectedGenderByIndex = new Map();

images.forEach((item, index) => {
    item.addEventListener("click", () => {
        images.forEach((img) => img.classList.remove("newClass"));
        details.forEach((detail) => detail.classList.remove("active"));

        item.classList.add("newClass");
        details[index].classList.add("active");

        // Restore previously selected gender image (if any)
        const selectedSrc = selectedGenderByIndex.get(index);
        const genPhoto = details[index].querySelectorAll(".genderPhoto img");
        if (selectedSrc && genPhoto.length) {
            genPhoto.forEach(photo => {
                photo.src = selectedSrc;
            });
        }

        // Attach gender selector only once
        gen.forEach((imgElement) => {
            imgElement.onclick = () => {
                const src = imgElement.src;
                const currentGenPhoto = details[index].querySelectorAll(".genderPhoto img");
                currentGenPhoto.forEach(photo => {
                    photo.src = src;
                });
                // Save selected src for this index
                selectedGenderByIndex.set(index, src);
            };
        });
    });
});












// ---------Accordion-------------

const acc = document.querySelectorAll(".accordionContent");
acc.forEach((item, value) => {
    // console.log(value);
    let hd = item.querySelector(".head");
    hd.addEventListener('click', () => {
        item.classList.toggle("open");
        let head = item.querySelector(".dis");
        if (item.classList.contains("open")) {
            head.style.height = `${head.scrollHeight}px`;
            item.querySelector("i").classList.replace("fa-plus", "fa-minus");
        } else {
            head.style.height = '0px';
            item.querySelector("i").classList.replace("fa-minus", "fa-plus");
        }
        MyFun(value);
    });

});

function MyFun(values) {
    acc.forEach((ind, ind2) => {

        if (values != ind2) {
            // console.log(values, ind2);
            ind.classList.remove("open");
            let s = ind.querySelector(".dis");
            s.style.height = "0px";
            ind.querySelector("i").classList.replace("fa-minus", "fa-plus");
        }
    })
}


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
});
var swiperPhone = new Swiper(".myPhone", {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".nextSec",
        prevEl: ".prevSec",
    },
});







