
document.addEventListener("DOMContentLoaded", function () {
    const productsLink = document.querySelector("#products");

    productsLink.addEventListener("click", function (event) {
        event.preventDefault();
        const productsSection = document.getElementById("products");
        const headerOffset = 100;
        const elementPosition = productsSection.getBoundingClientRect().top;
        const offsetPosition = elementPosition - headerOffset;

        window.scrollBy({
            top: offsetPosition,
            behavior: "smooth",
        });
    });
});

function scrollToProducts() {
    const productsSection = document.getElementById("products");
    const headerOffset = 100;
    const elementPosition = productsSection.getBoundingClientRect().top;
    const offsetPosition = elementPosition - headerOffset;
  
    window.scrollTo({
      top: offsetPosition,
      behavior: "smooth",
    });
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    const shopNowButton = document.querySelector('.btn');
  
    shopNowButton.addEventListener("click", scrollToProducts);
  });