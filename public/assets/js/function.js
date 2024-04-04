/**
 * increase dicrease button
 */
$(document).ready(function () {

    function showToast(message) {
        const toastContainer = $('#toast-container');
        const toast = $('<div>').addClass('toast').text(message);
        toastContainer.append(toast);
        
        toast.fadeIn(300).delay(3000).fadeOut(300, function() {
          $(this).remove();
        });
      }

    function formatPrice(price) {
        return new Intl.NumberFormat("en-US", {
            style: "currency",
            currency: "USD",
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        }).format(price);
    }

    $(".increaseBtn").click(function () {
        var productId = $(this).data("pid");
        var input = $("input[data-pid='" + productId + "']");
        var currentValue = parseInt(input.val());
        const qty = currentValue + 1;
        input.val(qty);
        $(".qty_product" + productId).val(qty);
    });

    $(".decreaseBtn").click(function () {
        var productId = $(this).data("pid");
        var input = $("input[data-pid='" + productId + "']");
        var currentValue = parseInt(input.val());
        if (currentValue > 0) {
            const qty = currentValue - 1;
            input.val(qty);
            $(".qty_product" + productId).val(qty);
        }
    });

    $(".cart_form").submit(function (e) {
        e.preventDefault();

        var productId = $(this).data("pid");
        var qty = $(this)
            .find(".qty_product" + productId)
            .val();

        console.log("Product ID:", productId);
        console.log("Quantity:", qty);
        var csrfToken = $('meta[name="csrf-token"]').attr("content");

        // AJAX request to add item to the cart
        $.ajax({
            url: "/cart/add", // Endpoint to add item to cart
            method: "POST",
            dataType: "JSON",
            headers: {
                "X-CSRF-TOKEN": csrfToken, // Include CSRF token in the request headers
            },
            data: {
                product_id: productId,
                quantity: qty,
            },
            success: function (response) {
                // Handle success response
                console.log(response);
                showToast('Item added to cart successfully');
                
                cartUpdate();
            },
        });
    });

    function cartUpdate() {
        $.ajax({
            url: "http://127.0.0.1:8000/cart",
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                let amount = 0;
                let html = "";
                $.each(data, function (i, item) {
                    amount += item.totalPrice;
                    html += `
                        <div class="grid grid-cols-2 lg:grid-cols-2 min-[550px]:gap-6 border-t border-gray-200 py-6">
                        <div
                            class="flex items-center min-[150px]:flex-row gap-3 min-[550px]:gap-6 w-full max-xl:justify-center max-xl:max-w-xl max-xl:mx-auto">
                            <div class="img-box">
                              <img src="${item.image}"
                                    alt="${item.name}" class="w-[80px]"></div>
                            <div class="pro-data w-full max-w-sm ">
                                <h5 class="font-semibold text-xl leading-8 text-black max-[550px]:text-center">
                                    ${item.name}
                                </h5>
                                <h6 class="font-medium text-lg leading-8 text-indigo-600  max-[550px]:text-center">
                                ${formatPrice(item.price)}</h6>
                            </div>
                        </div>
                        <div
                            class="flex items-center flex-col sm:flex-row w-full max-xl:max-w-xl max-xl:mx-auto gap-2">

                            <div class="flex items-center w-full mx-auto justify-center">
                                <button data-pid="${item.id}"
                                    class="decreaseBtnCart group px-4 py-2 border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                                    -
                                </button>
                                <input type="text"
                                    class="p_qty_${
                                        item.id
                                    } border-y border-gray-200 outline-none text-gray-900 font-semibold text-lg w-full max-w-[118px] min-w-[80px] placeholder:text-gray-900 py-1 text-center bg-transparent"
                                    value="${item.quantity}">
                                <button data-pid="${
                                    item.id
                                }" class="increaseBtnCart group px-4 py-2 border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                                    +
                                </button>
                            </div>
                            <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 w-full max-w-[176px] text-center">
                            ${formatPrice(item.totalPrice)}</h6>
                        </div>
                    </div>
                        
                        `;
                });

                $("#cart_allProduct").html("");
                $("#cart_allProduct").html(html);
                $("#cart_amount").html(`${formatPrice(amount)}`);
            },
        });
    }

    cartUpdate();

    $(document).on("click", ".increaseBtnCart", function () {
        
        const pid = $(this).data("pid");

        const qty = $(`.p_qty_${pid}`).val();

        const currentValue = parseInt(qty) + 1;
        console.log("🚀 ~ $ ~ currentValue:", currentValue);

        $(`.p_qty_${pid}`).val(currentValue);

        const csrfToken = $('meta[name="csrf-token"]').attr("content");

        $.ajax({
            url: "/cart/increase",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            data: {
                product_id: pid,
            },
            success: function (response) {
                // Handle success response
                showToast('Quantity increased successfully');
                // console.log("🚀 ~ $ ~ response:", response)
                // console.log("");
                cartUpdate();
            },
        });
    });
    $(document).on("click", ".decreaseBtnCart", function () {
        
        const pid = $(this).data("pid");

        const qty = $(`.p_qty_${pid}`).val();

        const currentValue = parseInt(qty) - 1;
        if (currentValue > 0) {
            $(`.p_qty_${pid}`).val(currentValue);

            const csrfToken = $('meta[name="csrf-token"]').attr("content");

            $.ajax({
                url: "/cart/decrease",
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
                data: {
                    product_id: pid,
                },
                success: function (response) {
                    // Handle success response
                    showToast('Quantity decreased successfully');
                    // console.log("🚀 ~ $ ~ response:", response)
                    // console.log("Quantity increased successfully");
                    cartUpdate();
                },
            });
        } else {
            const csrfToken = $('meta[name="csrf-token"]').attr("content");
            $.ajax({
                url: "/cart/remove",
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
                data: {
                    product_id: pid,
                },
                success: function (response) {
                    // Handle success response
                    console.log("");
                    showToast('Item removed from cart successfully');
                    cartUpdate();
                }
            });
        }
    });

    $("#orderConfirm").click(function(){
        var csrfToken = $('meta[name="csrf-token"]').attr("content");

        $.ajax({
            url: "/user/order",
            method: "POST",
            dataType: "JSON",
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            success: function (response) {
                // Handle success response
                showToast(response.message)
                console.log("🚀 ~ $ ~ response:", response)
                cartUpdate();
                
            },
        });
    })

});

//    header

// jQuery code for toggling nested accordion
$(".nested-accordion").find(".comment").slideUp();
$(".nested-accordion")
    .find("h2")
    .click(function () {
        $(this).next(".comment").slideToggle(100);
        $(this).toggleClass("selected");
    });
// Get the menu icon
const menuIcon = document.querySelector(".menu-icon");
// Get the popup
const popup = document.getElementById("popup");

// Function to open the popup
function openPopup() {
    popup.classList.remove("hidden"); // Remove 'hidden' class
    popup.classList.add("animate-slide-down"); // Add animation class
}

// Function to close the popup
function closePopup() {
    popup.classList.add("hidden"); // Add 'hidden' class
    popup.classList.remove("animate-slide-down"); // Remove animation class
}

// Add click event listener to the menu icon
menuIcon.addEventListener("click", openPopup);
