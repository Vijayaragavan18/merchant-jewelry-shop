


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


const image = document.querySelectorAll(".imageGender");
const gDetails = document.querySelectorAll(".bottomScroll_section");

function sec(index) {

    gDetails.forEach((dItems, dCount) => {
        if (index == dCount) {
            dItems.classList.add("active");
            remove(dCount);
        }
    })

}
let a = 0;
image.forEach((item, index) => {
    item.addEventListener("click", (e) => {
        item.classList.add("newClass");
        if (index >= a) {

            sec(index);
            a = 0;
        }

    })
})

function remove(dCount) {
    gDetails.forEach((one, two) => {

        if (dCount != two) {

            image.forEach((three, four) => {
                if (dCount != four) {
                    console.log(three);
                    three.classList.remove("newClass");
                }
            })
            one.classList.remove("active");
        }
    })

}

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


