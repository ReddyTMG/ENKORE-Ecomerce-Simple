const productContainers = [...document.querySelectorAll('.product-con')];
const nxtBtn = [...document.querySelectorAll('#next-button')];
const preBtn = [...document.querySelectorAll('#back-button')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

var openBtn = document.getElementById("openbtn");
var closeBtn = document.getElementById("closebtn");
var popup = document.getElementById("popup");

openBtn.addEventListener("click", () => {
    popup.classList.add("open");
});

closeBtn.addEventListener("click", () => {
    popup.classList.remove("open");
});


