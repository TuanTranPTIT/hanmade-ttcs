const imgPosition = document.querySelectorAll(".aspect-ratio-123 img")
const imgContainer = document.querySelector(".aspect-ratio-123")
const dotItem = document.querySelectorAll(".dot")
let imgNumber = imgPosition.length
let index = 0
imgPosition.forEach(function(image, index) {
    image.style.left = index * 100 + "%"
    dotItem[index].addEventListener("click", function() {
        slide(index)
    })
})

function imgSlide() {
    index++;
    console.log(index)
    if (index >= imgNumber) index = 0;
    slide(index)
}

function slide(index) {
    imgContainer.style.left = "-" + index * 100 + "%";
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}
setInterval(imgSlide, 5000)
    //----------------------cartegory------------------------------
const itemSlideBar = document.querySelectorAll(".cartegory-left-li")
itemSlideBar.forEach(function(menu, index) {
    menu.addEventListener("click", function() {
        menu.classList.toggle("block")
    })

})

function sort_product() {
    // Lấy giá trị được chọn từ phần tử select
    var sortValue = document.getElementsByName('sort_product')[0].value;

    // Gửi yêu cầu Ajax đến tệp PHP để xử lý dữ liệu
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Xử lý dữ liệu trả về từ tệp PHP
            console.log(this.responseText);
        }
    };
    xhttp.open("GET", "product_class.php?sort_product=" + sortValue, true);
    xhttp.send();
}
//-------------------------product-------------------------------

const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")
smallImg.forEach(function(imgItem, X) {
    imgItem.addEventListener("click", function() {
        bigImg.src = imgItem.src
    })
})

const gioithieu = document.querySelector(".GioiThieu")


const butTon = document.querySelector(".product-content-right-bottom-top")
if (butTon) {
    butTon.addEventListener("click", function() {
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}