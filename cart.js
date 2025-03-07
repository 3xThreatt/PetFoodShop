// Reference: Code supplied by "AntonellaP" at https://codepen.io/antonietta/full/MVedpj/

(function() {
    // VARS
    const productsContainer = document.querySelector("#grid");
    const cartContainer = document.querySelector("#shopping-cart");
    const cartContent = document.querySelector("#cart-content");
    const toggleCartBtn = document.querySelector("#toggle-cart-btn");
    const clearCartBtn = document.querySelector("#clear-cart");
    const checkoutBtn = document.querySelector("#checkout-btn");
    const totalPriceContainer = document.querySelector("#total-price");
  
    // FUNCTIONS
  
    function toggleCart() {
      // toggle shopping cart visibility
      cartContainer.classList.toggle("open");
    }
  
    function getLSContent() {
      // get contents from local storage.
      // if nothing is there, create an empty array
      const lsContent = JSON.parse(localStorage.getItem("products")) || [];
      return lsContent;
    }
  
    function setLSContent(lsContent) {
      // save content inside local storage
      localStorage.setItem("products", JSON.stringify(lsContent));
    }
  
    function calculateTotal(prices) {
      // calculate the total price in the cart
      // add delivery costs
      // remove delivery costs if over 300
      var total = prices.reduce(function(prev, next) {
        return prev + next;
      }, 0);

      if (total < 300)
      {
        total = total + 10;
      }

      return total
    }
  
    function getCartItemPrices() {
      const lsContent = getLSContent();      
      const prices = [];

      if (lsContent !== null) {
        for (let product of lsContent) {
          prices.push(product.price * product.quantity)
        }
      }
      
      return prices;
    }

    function displayCartTotal() {
      // display the total cost in the cart
      const prices = getCartItemPrices();
      let total = 0;
      if (prices) {
        total = calculateTotal(prices);
        totalPriceContainer.innerHTML = `<span class="total">Total: $${total.toFixed(
          0
        )}</span>`;
      } else {
        totalPriceContainer.innerHTML = '<span class="total">Total: $0</span>';
      }
    }
  
    function displayProducts() {
      // display all products in the cart
  
      // get contents from local storage
      const lsContent = getLSContent();
      let productMarkup = "";
      // if local storage is not empty, build the
      // cart items markup and the appropriate details
      if (lsContent !== null) {
        for (let product of lsContent) {
          productMarkup += `
            <tr>
            <td><img class="cart-image" src="${product.image}" alt="${product.name}" ></td>
            <td>
              ${product.name}
            </td>
            <td>$${product.price}</td>
            <td><input type="number" id="quantity" name="quantity" data-id="${product.id}" value="${product.quantity}" min="1" max="5"></td>
            <td>$${product.price * product.quantity}</td>
            <td><a href="#" data-id="${product.id}" class="remove">X</a></td>
            </tr>
          `;
        }
      } else {
        // if no content is in local storage, alert user
        productMarkup = "Your cart is empty.";
      }
      // add markup to DOM
      cartContent.querySelector("tbody").innerHTML = productMarkup;

      // bind changeQuantity to change event of the cartContent table
      var div_list = cartContent.querySelectorAll("input"); // returns NodeList
      var div_array = [...div_list]; // converts NodeList to Array
      div_array.forEach(div => {
        div.addEventListener("change", function(e) {
          e.preventDefault();
          // identify the button that was clicked
          const target = e.target;
   
          // get the value of the data-id property, which contains the
          // id of the selected product
          const productId = target.getAttribute("data-id");
          const value = target.value;

          // use the id to update the selected product
          updateQuantity(productId, value);      

          // adjust the total
          displayCartTotal();          
        });
      });
    }
  
    function saveProduct(clickedBtn) {
      // save selected product in local storage and display it in the cart together
  
      // vars
      const productId = clickedBtn.getAttribute("data-id");
      const card = clickedBtn.parentElement.parentElement;
      const cardInfo = clickedBtn.parentElement;
      const prodImage = card.querySelector("img").src;
      const prodName = cardInfo.querySelector("h1").textContent;
      const prodPrice = parseInt(cardInfo.querySelector(".card__price").textContent.replace("$", ""));
  
      let isProductInCart = false;
  
      // get local storage array
      const lsContent = getLSContent();
  
      // to avoid user adding the same product twice, check
      // the product is not in LS already before adding it
      lsContent.forEach(function(product) {
        if (product.id === productId) {
          alert("This course is already in your cart.");
          isProductInCart = true;
        }
      });
  
      // only if the product is not already in the cart,
      // create an object representing selected product info
      // and push it into local storage array
      if (!isProductInCart) {
        lsContent.push({
          id: productId,
          image: prodImage,
          name: prodName,
          price: prodPrice,
          quantity: 1
        });
  
        // add product into into local storage
        setLSContent(lsContent);
        // update the display of courses in the shopping cart
        displayProducts();
      }
    }

    function updateQuantity(productId, value) {
      // update the quantity of a product
  
      // retrieve list of products from LS
      const lsContent = getLSContent();
  
      // find the product
      lsContent.forEach(function(product, i) {
        if (product.id === productId) {
          // update the quantity
          product.quantity = value;          
        }
      });
  
      setLSContent(lsContent);
  
      displayProducts();
    }
  
    function removeProduct(productId) {
      // remove product from cart (and from local storage)
  
      // retrieve list of products from LS
      const lsContent = getLSContent();
  
      // get the index of the product item to remove
      // inside the local storage content array
      let productIndex;
      lsContent.forEach(function(product, i) {
        if (product.id === productId) {
          productIndex = i;
        }
      });
  
      // modify the items in local storage array
      // to remove the selected product item
  
      lsContent.splice(productIndex, 1);
      // update local storage content
      setLSContent(lsContent);
  
      displayProducts();
    }
  
    function clearCart() {
      // clear all products from cart (and local storage)
  
      // retrieve list of products from LS
      const lsContent = getLSContent();
      // empty array in local storage
      lsContent.splice(0, lsContent.length);
      // update local storage
      setLSContent(lsContent);
      // display cart content again
      displayProducts();
    }
  
    function checkout() {
      // checkout: just clear the cart
      // after user confirms the checkout process
      const cartProducts = cartContent.querySelector("tbody").innerHTML;
      if (cartProducts !== "" && confirm("Are you sure you want to checkout?")) {
        clearCart();
        window.location.href = "thankyou.html"
      } else {
        return;
      }
    }
  
    // BIND EVENTS AND CALL FUNCTIONS
  
    // Page load:
    document.addEventListener("DOMContentLoaded", function(e) {
      // display list of products in cart, if any, on page load
      displayProducts();
      // display cart total
      displayCartTotal();
    });
  
    // open and close shopping cart
    // when cart button is clicked
    toggleCartBtn.addEventListener("click", function(e) {
      e.preventDefault();
      toggleCart();
    });
  
    // Save product in cart and Local Storage
    // when add to cart button is clicked
    productsContainer.addEventListener("click", function(e) {
      if (e.target.classList.contains("add-to-cart")) {
        e.preventDefault();
        const clickedBtn = e.target;
        saveProduct(clickedBtn);
      }
    });
  
    productsContainer.addEventListener("click", function(e) {
      if (e.target.classList.contains("add-to-cart")) {
        displayCartTotal();
      }
    });    
  
    // bind removeProduct to click event of the cartContent table
    cartContent.querySelector("tbody").addEventListener("click", function(e) {
      e.preventDefault();
      // identify the button that was clicked
      const clickedBtn = e.target;
      // if it's a remove button
      if (e.target.classList.contains("remove")) {
        // get the value of the data-id property, which contains the
        // id of the selected product
        const productId = clickedBtn.getAttribute("data-id");
        // use the id to remove the selected product
        removeProduct(productId);
        // display products in the cart again,
        // now the list should be displayed with 1 less product
        // or empty if no products are left in the cart
  
        // adjust the total
        displayCartTotal();
      }
    });
  
    // bind the button to clear the cart both to the function that
    // clears the cart and to the function that adjusts the total price
    clearCartBtn.addEventListener("click", function(e) {
      e.preventDefault();
      clearCart();
    });
    clearCartBtn.addEventListener("click", displayCartTotal);
  
    // bind the button that does the checkout both to the function that
    // controls the checkout and and to the function that adjusts the total price
    checkoutBtn.addEventListener("click", function(e) {
      e.preventDefault();
      checkout();
    });
    checkoutBtn.addEventListener("click", displayCartTotal);
  })();
