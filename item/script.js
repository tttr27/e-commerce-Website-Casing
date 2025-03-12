document.addEventListener("DOMContentLoaded", function () {
    filterProduct("all"); // Show all products by default
});

function filterProduct(category) {
    let products = document.querySelectorAll(".product-card");

    products.forEach((product) => {
        let productCategory = product.getAttribute("data-category");

        if (category === "all" || category === productCategory) {
            product.style.display = "block";
        } else {
            product.style.display = "none";
        }
    });
}

function searchProduct() {
    let input = document.getElementById("search-input").value.toLowerCase();
    let products = document.querySelectorAll(".product-card");

    products.forEach((product) => {
        let productName = product.querySelector("h3").textContent.toLowerCase();

        if (productName.includes(input)) {
            product.style.display = "block";
        } else {
            product.style.display = "none";
        }
    });
}
