"use strict";

<<<<<<< HEAD
let elementViewAllHoldOrdersSearch = $(".view_all_hold_orders_search");
let getYesWord = $("#message-yes-word").data("text");
let getNoWord = $("#message-no-word").data("text");
let messageAreYouSure = $("#message-are-you-sure").data("text");

document.addEventListener("keydown", function (event) {
    if (event.altKey && event.code === "KeyO") {
        $("#submit_order").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyZ") {
        $("#payment_close").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyS") {
        $("#order_complete").click();
=======
let elementViewAllHoldOrdersSearch = $('.view_all_hold_orders_search');
let getYesWord = $('#message-yes-word').data('text');
let getNoWord = $('#message-no-word').data('text');
let messageAreYouSure = $('#message-are-you-sure').data('text');

document.addEventListener("keydown", function (event) {
    if (event.altKey && event.code === "KeyO") {
        $('#submit_order').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyZ") {
        $('#payment_close').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyS") {
        $('#order_complete').click();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyC") {
        emptyCart();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyA") {
<<<<<<< HEAD
        $("#add_new_customer").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyN") {
        $("#submit_new_customer").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyK") {
        $("#short-cut").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyP") {
        $("#print_invoice").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyQ") {
        $("#search").focus();
=======
        $('#add_new_customer').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyN") {
        $('#submit_new_customer').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyK") {
        $('#short-cut').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyP") {
        $('#print_invoice').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyQ") {
        $('#search').focus();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        $("#-pos-search-box").css("display", "none");
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyE") {
        $("#pos-search-box").css("display", "none");
<<<<<<< HEAD
        $("#extra_discount").click();
=======
        $('#extra_discount').click();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyD") {
        $("#pos-search-box").css("display", "none");
<<<<<<< HEAD
        $("#coupon_discount").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyB") {
        $("#invoice_close").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyX") {
        $(".action-clear-cart").click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyR") {
        $(".action-new-order").click();
=======
        $('#coupon_discount').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyB") {
        $('#invoice_close').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyX") {
        $('.action-clear-cart').click();
        event.preventDefault();
    }
    if (event.altKey && event.code === "KeyR") {
        $('.action-new-order').click();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        event.preventDefault();
    }
});

<<<<<<< HEAD
$(".search-bar-input").on("keyup", function () {
    $(".pos-search-card").removeClass("d-none").show();
    let name = $(".search-bar-input").val();
    let elementSearchResultBox = $(".search-result-box");
    if (name.length > 0) {
        $("#pos-search-box").removeClass("d-none").show();
        $.get({
            url: $("#route-vendor-products-search-product").data("url"),
            dataType: "json",
            data: {
                name: name,
            },
            beforeSend: function () {
                $("#loading").fadeIn();
            },
            success: function (data) {
                elementSearchResultBox.empty().html(data.result);
                renderSelectProduct();
                renderQuickViewSearchFunctionality();
            },
            complete: function () {
                $("#loading").fadeOut();
=======
$(".search-bar-input").on('keyup', function () {
    $(".pos-search-card").removeClass('d-none').show();
    let name = $(".search-bar-input").val();
    let elementSearchResultBox = $('.search-result-box');
    if (name.length > 0) {
        $('#pos-search-box').removeClass('d-none').show();
        $.get({
            url: $('#route-vendor-products-search-product').data('url'),
            dataType: 'json',
            data: {
                name: name
            },
            beforeSend: function () {
                $('#loading').fadeIn();
            },
            success: function (data) {
                elementSearchResultBox.empty().html(data.result);
                if (parseInt(data.count) === 1) {
                    elementSearchResultBox.empty().hide();
                    $('#search').val('');
                    quickView(data.id);
                }
                renderSelectProduct()
                renderQuickViewSearchFunctionality()
            },
            complete: function () {
                $('#loading').fadeOut();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            },
        });
    } else {
        elementSearchResultBox.empty().hide();
    }
});

<<<<<<< HEAD
$(".action-category-filter").on("change", (event) => {
    let getUrl = new URL(window.location.href);
    getUrl.searchParams.set("category_id", $(event.target).val());
    window.location.href = getUrl.toString();
});

$(".action-customer-change").on("change", function () {
    $.post({
        url: $("#route-vendor-pos-change-customer").data("url"),
        data: {
            _token: $('meta[name="_token"]').attr("content"),
            user_id: $(this).val(),
        },
        beforeSend: function () {
            $("#loading").fadeIn();
        },
        success: function (data) {
            $("#cart-summary").empty().html(data.view);
            viewAllHoldOrders("keyup");
=======
$('.action-category-filter').on('change', (event) => {
    let getUrl = new URL(window.location.href);
    getUrl.searchParams.set('category_id', $(event.target).val());
    window.location.href = getUrl.toString();
});

$('.action-customer-change').on('change', function() {
    $.post({
        url: $('#route-vendor-pos-change-customer').data('url'),
        data: {
            _token: $('meta[name="_token"]').attr('content'),
            user_id: $(this).val(),
        },
        beforeSend: function () {
            $('#loading').fadeIn();
        },
        success: function (data) {
            $('#cart-summary').empty().html(data.view);
            viewAllHoldOrders('keyup');
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            posUpdateQuantityFunctionality();
            basicFunctionalityForCartSummary();
            removeFromCart();
        },
        complete: function () {
<<<<<<< HEAD
            $("#loading").fadeOut();
        },
    });
});

$(".action-view-all-hold-orders").on("click", () => viewAllHoldOrders());
elementViewAllHoldOrdersSearch.on("keyup", () => viewAllHoldOrders("keyup"));
=======
            $('#loading').fadeOut();
        }
    });
})

$('.action-view-all-hold-orders').on('click', () => viewAllHoldOrders());
elementViewAllHoldOrdersSearch.on('keyup', () => viewAllHoldOrders('keyup'));
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

function viewAllHoldOrders(action = null) {
    $.ajaxSetup({
        headers: {
<<<<<<< HEAD
            "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
        },
    });
    $.post({
        url: $("#route-vendor-pos-view-hold-orders").data("url"),
        data: {
            customer: elementViewAllHoldOrdersSearch.val(),
        },
        beforeSend: function () {
            $("#loading").fadeIn();
        },
        success: function (data) {
            $("#hold-orders-modal-content").empty().html(data.view);
            if (action !== "keyup") {
                $("#hold-orders-modal-btn").click();
            }
            $(".total_hold_orders").text(data.totalHoldOrders);
            renderViewHoldOrdersFunctionality();
            basicFunctionalityForCartSummary();
        },
        complete: function () {
            $("#loading").fadeOut();
        },
=======
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.post({
        url: $('#route-vendor-pos-view-hold-orders').data('url'),
        data: {
            customer: elementViewAllHoldOrdersSearch.val()
        },
        beforeSend: function () {
            $('#loading').fadeIn();
        },
        success: function (data) {
            $('#hold-orders-modal-content').empty().html(data.view);
            if (action !== 'keyup') {
                $('#hold-orders-modal-btn').click();
            }
            $('.total_hold_orders').text(data.totalHoldOrders);
            renderViewHoldOrdersFunctionality()
            basicFunctionalityForCartSummary()
        },
        complete: function () {
            $('#loading').fadeOut();
        }
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    });
}

function renderSelectProduct() {
<<<<<<< HEAD
    $(".action-get-variant-for-already-in-cart").on("click", function () {
        getVariantForAlreadyInCart($(this).data("action"));
    });

    $(".action-add-to-cart").on("click", function () {
        addToCart();
    });

    $(".action-color-change").on("click", function () {
        let val = $(this).val();
        $(".color-border").removeClass("border-add");
        $("#label-" + val.id).addClass("border-add");
    });

    cartQuantityInitialize();
    getVariantPrice();
    $("#add-to-cart-form input").on("change", function () {
        getVariantPrice();
    });
}

renderSelectProduct();
renderQuickViewFunctionality();

function renderQuickViewFunctionality() {
    $(".action-select-product").on("click", function () {
        quickView($(this).data("id"));
    });
}

function renderQuickViewSearchFunctionality() {
    $(".action-select-search-product").on("click", function () {
        quickView($(this).data("id"));
    });
}

function basicFunctionalityForCartSummary() {
    $(".action-empty-alert-show").on("click", () => {
        toastr.warning($("#message-cart-is-empty").data("text"), {
            CloseButton: true,
            ProgressBar: true,
        });
    });

    $(".action-clear-cart").on("click", () => {
        document.location.href = $("#route-vendor-pos-clear-cart-ids").data(
            "url"
        );
    });

    $(".action-new-order").on("click", () => {
        document.location.href = $("#route-vendor-pos-new-cart-id").data("url");
    });

    $(".action-cart-change").on("click", function () {
        let value = $(this).data("cart");
        let dynamicUrl = $("#route-vendor-pos-change-cart-editable").data(
            "url"
        );
        dynamicUrl = dynamicUrl.replace(":value", `${value}`);
        window.location.href = dynamicUrl;
    });

    $(".action-empty-cart").on("click", function () {
        Swal.fire({
            title: messageAreYouSure,
            text: $("#message-you-want-to-remove-all-items-from-cart").data(
                "text"
            ),
            type: "warning",
            showCancelButton: true,
            cancelButtonColor: "default",
            confirmButtonColor: "#161853",
            cancelButtonText: getNoWord,
            confirmButtonText: getYesWord,
            reverseButtons: true,
        }).then((result) => {
            if (result.value) {
                $.post(
                    $("#route-vendor-pos-empty-cart").data("url"),
                    {
                        _token: $('meta[name="_token"]').attr("content"),
                    },
                    function (data) {
                        $("#cart-summary").empty().html(data.view);
                        toastr.info(
                            $("#message-item-has-been-removed-from-cart").data(
                                "text"
                            ),
                            {
                                CloseButton: true,
                                ProgressBar: true,
                            }
                        );
                    }
                );
            }
        });
    });

    $(".action-form-submit").on("click", function () {
        Swal.fire({
            title: messageAreYouSure,
            type: "warning",
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: getNoWord,
            confirmButtonText: getYesWord,
            reverseButtons: true,
        }).then(function (result) {
            if (result.value) {
                $("#order_place").submit();
            }
        });
    });
}
$(".action-extra-discount").on("click", function () {
    let discount = $("#dis_amount").val();
    let type = $("#type_ext_dis").val();
    if (discount > 0) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
            },
        });
        $.post({
            url: $("#route-vendor-pos-update-discount").data("url"),
=======
    $('.action-get-variant-for-already-in-cart').on('click', function (){
        getVariantForAlreadyInCart($(this).data('action'));
    })

    $('.action-add-to-cart').on('click', function (){
        addToCart();
    })

    $('.action-color-change').on('click', function () {
        let val = $(this).val();
        $('.color-border').removeClass("border-add");
        $('#label-'+val.id).addClass("border-add");
    })

    cartQuantityInitialize();
    getVariantPrice();
    $('#add-to-cart-form input').on('change', function () {
        getVariantPrice();
    })
}

renderSelectProduct()
renderQuickViewFunctionality()

function renderQuickViewFunctionality() {
    $('.action-select-product').on('click', function () {
        quickView($(this).data('id'));
    })
}

function renderQuickViewSearchFunctionality() {
    $('.action-select-search-product').on('click', function () {
        quickView($(this).data('id'));
    })
}

function basicFunctionalityForCartSummary() {
    $('.action-empty-alert-show').on('click', () => {
        toastr.warning($('#message-cart-is-empty').data('text'), {
            CloseButton: true,
            ProgressBar: true
        });
    })

    $('.action-clear-cart').on('click', () => {
        document.location.href = $('#route-vendor-pos-clear-cart-ids').data('url');
    })

    $('.action-new-order').on('click', () => {
        document.location.href = $('#route-vendor-pos-new-cart-id').data('url');
    })

    $('.action-cart-change').on('click', function () {
        let value = $(this).data('cart');
        let dynamicUrl = $('#route-vendor-pos-change-cart-editable').data('url');
        dynamicUrl = dynamicUrl.replace(":value", `${value}`);
        window.location.href = dynamicUrl;
    })

    $('.action-empty-cart').on('click', function () {
        Swal.fire({
            title: messageAreYouSure,
            text: $('#message-you-want-to-remove-all-items-from-cart').data('text'),
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '#161853',
            cancelButtonText: getNoWord,
            confirmButtonText: getYesWord,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.post($('#route-vendor-pos-empty-cart').data('url'), {
                    _token: $('meta[name="_token"]').attr('content')
                }, function (data) {
                    $('#cart').empty().html(data.view);
                    toastr.info($('#message-item-has-been-removed-from-cart').data('text'), {
                        CloseButton: true,
                        ProgressBar: true
                    });
                    viewAllHoldOrders('keyup');
                });
            }
        })
    })

    $('.action-form-submit').on('click', function () {
        Swal.fire({
            title: messageAreYouSure,
            type: 'warning',
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: getNoWord,
            confirmButtonText: getYesWord,
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                $('#order_place').submit();
            }
        });
    })
}
$('.action-extra-discount').on('click', function () {
    let discount = $('#dis_amount').val();
    let type = $('#type_ext_dis').val();
    if (discount > 0) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.post({
            url: $('#route-vendor-pos-update-discount').data('url'),
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            data: {
                discount: discount,
                type: type,
            },
            beforeSend: function () {
<<<<<<< HEAD
                $("#loading").fadeIn();
            },
            success: function (data) {
                if (data.extraDiscount === "success") {
                    toastr.success(
                        $("#message-extra-discount-added-successfully").data(
                            "text"
                        ),
                        {
                            CloseButton: true,
                            ProgressBar: true,
                        }
                    );
                } else if (data.extraDiscount === "empty") {
                    toastr.warning($("#message-cart-is-empty").data("text"), {
                        CloseButton: true,
                        ProgressBar: true,
                    });
                } else {
                    toastr.warning(
                        $(
                            "#message-this-discount-is-not-applied-for-this-amount"
                        ).data("text"),
                        {
                            CloseButton: true,
                            ProgressBar: true,
                        }
                    );
                }

                $(".modal-backdrop").addClass("d-none");
                $("#cart").empty().html(data.view);
                basicFunctionalityForCartSummary();
                posUpdateQuantityFunctionality();
                viewAllHoldOrders("keyup");
                removeFromCart();
                $("#search").focus();
            },
            complete: function () {
                $(".modal-backdrop").addClass("d-none");
                $(".footer-offset").removeClass("modal-open");
                $("#loading").fadeOut();
            },
        });
    } else {
        toastr.warning(
            $("#message-amount-can-not-be-negative-or-zero").data("text"),
            {
                CloseButton: true,
                ProgressBar: true,
            }
        );
    }
});

$(".action-coupon-discount").on("click", function () {
    let couponCode = $("#coupon_code").val();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
        },
    });
    $.post({
        url: $("#route-vendor-pos-coupon-discount").data("url"),
=======
                $('#loading').fadeIn();
            },
            success: function (data) {
                if (data.extraDiscount === 'success') {
                    toastr.success($('#message-extra-discount-added-successfully').data('text'), {
                        CloseButton: true,
                        ProgressBar: true
                    });
                } else if (data.extraDiscount === 'empty') {
                    toastr.warning($('#message-cart-is-empty').data('text'), {
                        CloseButton: true,
                        ProgressBar: true
                    });

                } else {
                    toastr.warning($('#message-this-discount-is-not-applied-for-this-amount').data('text'), {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }

                $('.modal-backdrop').addClass('d-none');
                $('#cart').empty().html(data.view);
                basicFunctionalityForCartSummary()
                posUpdateQuantityFunctionality()
                viewAllHoldOrders('keyup');
                removeFromCart();
                $('#search').focus();
            },
            complete: function () {
                $('.modal-backdrop').addClass('d-none');
                $(".footer-offset").removeClass("modal-open");
                $('#loading').fadeOut();
            }
        });
    } else {
        toastr.warning($('#message-amount-can-not-be-negative-or-zero').data('text'), {
            CloseButton: true,
            ProgressBar: true
        });
    }
})

$('.action-coupon-discount').on('click', function () {
    let couponCode = $('#coupon_code').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.post({
        url: $('#route-vendor-pos-coupon-discount').data('url'),
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        data: {
            coupon_code: couponCode,
        },
        beforeSend: function () {
<<<<<<< HEAD
            $("#loading").fadeIn();
        },
        success: function (data) {
            console.log(data);
            if (data.coupon === "success") {
                toastr.success(
                    $("#message-coupon-added-successfully").data("text"),
                    {
                        CloseButton: true,
                        ProgressBar: true,
                    }
                );
            } else if (data.coupon === "amount_low") {
                toastr.warning(
                    $(
                        "#message-this-discount-is-not-applied-for-this-amount"
                    ).data("text"),
                    {
                        CloseButton: true,
                        ProgressBar: true,
                    }
                );
            } else if (data.coupon === "cart_empty") {
                toastr.warning($("#message-cart-is-empty").data("text"), {
                    CloseButton: true,
                    ProgressBar: true,
                });
            } else {
                toastr.warning($("#message-coupon-is-invalid").data("text"), {
                    CloseButton: true,
                    ProgressBar: true,
                });
            }

            $("#cart").empty().html(data.view);
            $("#search").focus();
            basicFunctionalityForCartSummary();
            posUpdateQuantityFunctionality();
            viewAllHoldOrders("keyup");
            removeFromCart();
        },
        complete: function () {
            $(".modal-backdrop").addClass("d-none");
            $(".footer-offset").removeClass("modal-open");
            $("#loading").fadeOut();
        },
    });
});

basicFunctionalityForCartSummary();
posUpdateQuantityFunctionality();

function posUpdateQuantityFunctionality() {
    $(".action-pos-update-quantity").on("change", function (event) {
        let getKey = $(this).data("product-key");
        let quantity = $(this).val();
        let variant = $(this).data("product-variant");
        getPOSUpdateQuantity(getKey, quantity, event, variant);
    });
}

function getPOSUpdateQuantity(key, qty, e, variant = null) {
    if (qty !== "") {
        $.post(
            $("#route-vendor-pos-update-quantity").data("url"),
            {
                _token: $('meta[name="_token"]').attr("content"),
                key: key,
                quantity: qty,
                variant: variant,
            },
            function (data) {
                updateQuantityResponseProcess(data);
            }
        );
    } else {
        let element = $(e.target);
        let minValue = parseInt(element.attr("min"));
        $.post(
            $("#route-vendor-pos-update-quantity").data("url"),
            {
                _token: $('meta[name="_token"]').attr("content"),
                key: key,
                quantity: minValue,
                variant: variant,
            },
            function (data) {
                updateQuantityResponseProcess(data);
            }
        );
    }

    if (e.type == "keydown") {
        if (
            $.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) ||
            (e.keyCode >= 35 && e.keyCode <= 39)
        ) {
            return;
        }
        if (
            (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) &&
            (e.keyCode < 96 || e.keyCode > 105)
        ) {
=======
            $('#loading').fadeIn();
        },
        success: function (data) {
            console.log(data);
            if (data.coupon === 'success') {
                toastr.success($('#message-coupon-added-successfully').data('text'), {
                    CloseButton: true,
                    ProgressBar: true
                });
            } else if (data.coupon === 'amount_low') {
                toastr.warning($('#message-this-discount-is-not-applied-for-this-amount').data('text'), {
                    CloseButton: true,
                    ProgressBar: true
                });
            } else if (data.coupon === 'cart_empty') {
                toastr.warning($('#message-cart-is-empty').data('text'), {
                    CloseButton: true,
                    ProgressBar: true
                });
            } else {
                toastr.warning($('#message-coupon-is-invalid').data('text'), {
                    CloseButton: true,
                    ProgressBar: true
                });
            }

            $('#cart').empty().html(data.view);
            $('#search').focus();
            basicFunctionalityForCartSummary()
            posUpdateQuantityFunctionality()
            viewAllHoldOrders('keyup');
            removeFromCart();
        },
        complete: function () {
            $('.modal-backdrop').addClass('d-none');
            $(".footer-offset").removeClass("modal-open");
            $('#loading').fadeOut();
        }
    });
})

basicFunctionalityForCartSummary()
posUpdateQuantityFunctionality()

function posUpdateQuantityFunctionality() {
    $('.action-pos-update-quantity').on('keyup', function (event) {
        let getKey = $(this).data('product-key');
        let quantity = $(this).val();
        let variant = $(this).data('product-variant');
        getPOSUpdateQuantity(getKey, quantity, event, variant)
    })
}


function getPOSUpdateQuantity(key, qty, e, variant = null) {
    if (qty !== "") {
        $.post($('#route-vendor-pos-update-quantity').data('url'), {
            _token: $('meta[name="_token"]').attr('content'),
            key: key,
            quantity: qty,
            variant: variant
        }, function (data) {
            updateQuantityResponseProcess(data)
        });
    } else {
        let element = $(e.target);
        let minValue = parseInt(element.attr('min'));
        $.post($('#route-vendor-pos-update-quantity').data('url'), {
            _token: $('meta[name="_token"]').attr('content'),
            key: key,
            quantity: minValue,
            variant: variant
        }, function (data) {
            updateQuantityResponseProcess(data)
        });
    }

    if (e.type == 'keydown') {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) ||
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            e.preventDefault();
        }
    }
}

function updateQuantityResponseProcess(data) {
<<<<<<< HEAD
    if (data.productType === "physical" && data.qty < 0) {
        toastr.warning(
            $("#message-product-quantity-is-not-enough").data("text"),
            {
                CloseButton: true,
                ProgressBar: true,
            }
        );
    }
    if (data.upQty === "zeroNegative") {
        toastr.warning(
            $("#message-product-quantity-cannot-be-zero-in-cart").data("text"),
            {
                CloseButton: true,
                ProgressBar: true,
            }
        );
    }
    if (data.quantityUpdate == 1) {
        toastr.success($("#message-product-quantity-updated").data("text"), {
            CloseButton: true,
            ProgressBar: true,
        });
    }
    $("#cart").empty().html(data.view);
    basicFunctionalityForCartSummary();
    posUpdateQuantityFunctionality();
    viewAllHoldOrders("keyup");
=======
    if (data.productType === 'physical' && data.qty < 0) {
        toastr.warning($('#message-product-quantity-is-not-enough').data('text'), {
            CloseButton: true,
            ProgressBar: true
        });
    }
    if (data.upQty === 'zeroNegative') {
        toastr.warning($('#message-product-quantity-cannot-be-zero-in-cart').data('text'), {
            CloseButton: true,
            ProgressBar: true
        });
    }
    if (data.quantityUpdate == 1) {
        toastr.success($('#message-product-quantity-updated').data('text'), {
            CloseButton: true,
            ProgressBar: true
        });
    }
    $('#cart').empty().html(data.view);
    basicFunctionalityForCartSummary();
    posUpdateQuantityFunctionality();
    viewAllHoldOrders('keyup');
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    removeFromCart();
    removeFromCart();
}

<<<<<<< HEAD
let dropdownSelect = $("#dropdown-order-select");
dropdownSelect.on(
    "click",
    ".dropdown-menu .dropdown-item:not(:last-child)",
    function () {
        let selectedText = $(this).text();
        dropdownSelect.find(".dropdown-toggle").text(selectedText);
    }
);

$("#order_place").submit(function (eventObj) {
    let customerValue = $("#customer").val();
    if (customerValue) {
        $(this).append(
            '<input type="hidden" name="user_id" value="' +
                customerValue +
                '" /> '
        );
=======
let dropdownSelect = $('#dropdown-order-select');
dropdownSelect.on('click', '.dropdown-menu .dropdown-item:not(:last-child)', function () {
    let selectedText = $(this).text();
    dropdownSelect.find('.dropdown-toggle').text(selectedText);
})

$('#order_place').submit(function (eventObj) {
    let customerValue = $('#customer').val();
    if (customerValue) {
        $(this).append('<input type="hidden" name="user_id" value="' + customerValue + '" /> ');
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }
    return true;
});

<<<<<<< HEAD
$(function () {
    $(document).on("click", "input[type=number]", function () {
=======

$(function () {
    $(document).on('click', 'input[type=number]', function () {
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        this.select();
    });
});

window.addEventListener("click", function (event) {
<<<<<<< HEAD
    let searchResultBoxes =
        document.getElementsByClassName("search-result-box");
    for (let i = 0; i < searchResultBoxes.length; i++) {
        let searchResultBox = searchResultBoxes[i];
        if (
            event.target !== searchResultBox &&
            !searchResultBox.contains(event.target)
        ) {
=======
    let searchResultBoxes = document.getElementsByClassName("search-result-box");
    for (let i = 0; i < searchResultBoxes.length; i++) {
        let searchResultBox = searchResultBoxes[i];
        if (event.target !== searchResultBox && !searchResultBox.contains(event.target)) {
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            searchResultBox.style.display = "none";
        }
    }
});

function renderViewHoldOrdersFunctionality() {
<<<<<<< HEAD
    $(".action-cancel-customer-order").on("click", function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
            },
        });
        $.post({
            url: $("#route-vendor-pos-cancel-order").data("url"),
            data: {
                cart_id: $(this).data("cart-id"),
            },
            beforeSend: function () {
                $("#loading").fadeIn();
            },
            success: function (data) {
                $("#hold-orders-modal-content").empty().html(data.view);
                toastr.info(data.message, {
                    CloseButton: true,
                    ProgressBar: true,
                });
                location.reload();
            },
            complete: function () {
                $("#loading").fadeOut();
            },
        });
    });
}

$(".action-print-invoice").on("click", function () {
    printDiv($(this).data("value"));
});
=======
    $('.action-cancel-customer-order').on('click', function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.post({
            url: $('#route-vendor-pos-cancel-order').data('url'),
            data: {
                cart_id: $(this).data('cart-id'),
            },
            beforeSend: function () {
                $('#loading').fadeIn();
            },
            success: function (data) {
                $('#hold-orders-modal-content').empty().html(data.view);
                location.reload();
            },
            complete: function () {
                $('#loading').fadeOut();
            }
        });
    })
}

$('.action-print-invoice').on('click', function () {
    printDiv($(this).data('value'));
})
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

function printDiv(divName) {
    let printContents = document.getElementById(divName).innerHTML;
    let originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

<<<<<<< HEAD
const renderRippleEffect = () => {
    function createRipple(event) {
        const button = event.currentTarget;
        const circle = document.createElement("span");
        const diameter = Math.max(button.clientWidth, button.clientHeight);
        const radius = diameter / 2;
        circle.style.width = circle.style.height = `${diameter}px`;
        circle.classList.add("ripple");
        const ripple = button.getElementsByClassName("ripple")[0];
        if (ripple) {
            ripple.remove();
        }
        button.appendChild(circle);
    }
    const buttons = document.getElementsByClassName("btn-number");
    for (const button of buttons) {
        button.addEventListener("click", createRipple);
    }
};

function quickView(product_id) {
    $.ajax({
        url: $("#route-vendor-pos-quick-view").data("url"),
        type: "GET",
        data: {
            product_id: product_id,
        },
        dataType: "json",
        beforeSend: function () {
            $("#loading").fadeIn();
        },
        success: function (data) {
            $("#quick-view").modal("show");
            $("#quick-view-modal").empty().html(data.view);
            renderSelectProduct();
            renderRippleEffect();
        },
        complete: function () {
            $("#loading").fadeOut();
=======
function quickView(product_id) {
    $.ajax({
        url: $('#route-vendor-pos-quick-view').data('url'),
        type: 'GET',
        data: {
            product_id: product_id
        },
        dataType: 'json',
        beforeSend: function () {
            $('#loading').fadeIn();
        },
        success: function (data) {
            $('#quick-view').modal('show');
            $('#quick-view-modal').empty().html(data.view);
            renderSelectProduct()
        },
        complete: function () {
            $('#loading').fadeOut();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        },
    });
}

function getVariantForAlreadyInCart(event = null) {
<<<<<<< HEAD
    let current_val = parseFloat($(".in-cart-quantity-field").val());

    if (current_val > 0) {
        $(".in-cart-quantity-minus").removeAttr("disabled");
        if (event == "plus") {
            $(".in-cart-quantity-field").val(current_val + 1);
        } else {
            $(".in-cart-quantity-field").val(current_val - 1);
            if (current_val <= 2) {
                $(".in-cart-quantity-minus").attr("disabled", true);
            }
        }
    } else {
        $(".in-cart-quantity-minus").attr("disabled", true);
    }
    getVariantPrice("already_in_cart");
=======
    let current_val = parseFloat($('.in-cart-quantity-field').val());

    if (current_val > 0) {
        $('.in-cart-quantity-minus').removeAttr('disabled');
        if (event == 'plus') {
            $('.in-cart-quantity-field').val(current_val + 1);
        } else {
            $('.in-cart-quantity-field').val(current_val - 1);
            if (current_val <= 2) {
                $('.in-cart-quantity-minus').attr('disabled', true);
            }
        }
    } else {
        $('.in-cart-quantity-minus').attr('disabled', true);
    }
    getVariantPrice('already_in_cart');
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
}

function checkAddToCartValidity() {
    var names = {};
<<<<<<< HEAD
    $("#add-to-cart-form input:radio").each(function () {
        names[$(this).attr("name")] = true;
=======
    $('#add-to-cart-form input:radio').each(function () {
        names[$(this).attr('name')] = true;
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    });
    var count = 0;
    $.each(names, function () {
        count++;
    });

<<<<<<< HEAD
    if ($("input:radio:checked").length - 1 == count) {
=======
    if (($('input:radio:checked').length - 1) == count) {
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        return true;
    }
    return false;
}

function cartQuantityInitialize() {
<<<<<<< HEAD
    $(".btn-number").click(function (e) {
        e.preventDefault();

        let fieldName = $(this).attr("data-field");
        let type = $(this).attr("data-type");
=======
    $('.btn-number').click(function (e) {
        e.preventDefault();

        let fieldName = $(this).attr('data-field');
        let type = $(this).attr('data-type');
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        let input = $("input[name='" + fieldName + "']");
        let currentVal = parseInt(input.val());

        if (!isNaN(currentVal)) {
<<<<<<< HEAD
            if (type == "minus") {
                if (currentVal > input.attr("min")) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr("min")) {
                    $(this).attr("disabled", true);
                }
            } else if (type == "plus") {
                if (currentVal < input.attr("max")) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr("max")) {
                    $(this).attr("disabled", true);
                }
=======
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            }
        } else {
            input.val(0);
        }
    });

<<<<<<< HEAD
    $(".input-number").focusin(function () {
        $(this).data("oldValue", $(this).val());
    });

    $(".input-number").change(function () {
        let minValue = parseInt($(this).attr("min"));
        let maxValue = parseInt($(this).attr("max"));
        let valueCurrent = parseInt($(this).val());
        let name = $(this).attr("name");

        if (valueCurrent >= minValue) {
            $(
                ".btn-number[data-type='minus'][data-field='" + name + "']"
            ).removeAttr("disabled");
        } else {
            Swal.fire({
                icon: "error",
                title: $("#message-cart-word").data("text"),
                text: $("#message-sorry-the-minimum-value-was-reached").data(
                    "text"
                ),
            });
            $(this).val($(this).data("oldValue"));
        }
        if (valueCurrent <= maxValue) {
            $(
                ".btn-number[data-type='plus'][data-field='" + name + "']"
            ).removeAttr("disabled");
        } else {
            Swal.fire({
                icon: "error",
                title: $("#message-cart-word").data("text"),
                text: $("#message-sorry-stock-limit-exceeded").data("url"),
            });
            $(this).val($(this).data("oldValue"));
        }
    });
    $(".input-number").keydown(function (e) {
        if (
            $.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) ||
            (e.keyCode >= 35 && e.keyCode <= 39)
        ) {
            return;
        }
        if (
            (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) &&
            (e.keyCode < 96 || e.keyCode > 105)
        ) {
=======
    $('.input-number').focusin(function () {
        $(this).data('oldValue', $(this).val());
    });

    $('.input-number').change(function () {

        let minValue = parseInt($(this).attr('min'));
        let maxValue = parseInt($(this).attr('max'));
        let valueCurrent = parseInt($(this).val());
        let name = $(this).attr('name');

        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            Swal.fire({
                icon: 'error',
                title: $('#message-cart-word').data('text'),
                text: $('#message-sorry-the-minimum-value-was-reached').data('text')
            });
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            Swal.fire({
                icon: 'error',
                title: $('#message-cart-word').data('text'),
                text: $('#message-sorry-stock-limit-exceeded').data('url')
            });
            $(this).val($(this).data('oldValue'));
        }
    });
    $(".input-number").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) ||
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            e.preventDefault();
        }
    });
}

function getVariantPrice(type = null) {
<<<<<<< HEAD
    if (
        $("#add-to-cart-form input[name=quantity]").val() > 0 &&
        checkAddToCartValidity()
    ) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url:
                $("#route-vendor-pos-get-variant-price").data("url") +
                (type ? "?type=" + type : ""),
            data: $("#add-to-cart-form").serializeArray(),
            success: function (data) {
                let stockOutMessage = $("#message-stock-out").data("text");
                let stockInMessage = $("#message-stock-id").data("text");
                let elementStockStatusInQuickView = $(
                    ".stock-status-in-quick-view"
                );

                if (data.quantity <= 0) {
                    elementStockStatusInQuickView
                        .removeClass("text-success")
                        .addClass("text-danger");
                    elementStockStatusInQuickView.html(
                        `<i class="tio-checkmark-circle-outlined"></i> ` +
                            stockOutMessage
                    );
                } else {
                    elementStockStatusInQuickView
                        .removeClass("text-danger")
                        .addClass("text-success");
                    elementStockStatusInQuickView.html(
                        `<i class="tio-checkmark-circle-outlined"></i> ` +
                            stockInMessage
                    );
                }

                if (data.inCartStatus == 0) {
                    $("#add-to-cart-form #chosen_price_div").removeClass(
                        "d-none"
                    );
                    $("#add-to-cart-form #chosen_price_div #chosen_price").html(
                        data.price
                    );
                    $("#set-discount-amount").html(data.discount);
                    $(".product-tax-show").html(data.tax);

                    $(".quick-view-modal-add-cart-button").text(
                        $("#message-add-to-cart").data("text")
                    );
                    $(".in-cart-quantity-system")
                        .addClass("d--none")
                        .removeClass("d-flex");
                    $(".default-quantity-system")
                        .removeClass("d--none")
                        .addClass("d-flex");
                } else {
                    $(".default-quantity-system")
                        .addClass("d--none")
                        .removeClass("d-flex");
                    $(".in-cart-quantity-system")
                        .removeClass("d--none")
                        .addClass("d-flex");
                    $(".quick-view-modal-add-cart-button").text(
                        $("#message-update-to-cart").data("text")
                    );
                    if (type == null) {
                        $(".in-cart-quantity-field").val(
                            data.inCartData.quantity
                        );
                        $(".in-cart-chosen_price").text(data.inCartData.price);
                        data.inCartData.quantity == 1
                            ? $(".in-cart-quantity-minus").attr(
                                  "disabled",
                                  true
                              )
                            : "";
                    } else {
                        $(".in-cart-chosen_price").text(data.price);
                        $("#chosen_price_div .product-tax-show").text(data.tax);
                    }
                }
            },
=======
    if ($('#add-to-cart-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: $('#route-vendor-pos-get-variant-price').data('url') + (type ? '?type=' + type : ''),
            data: $('#add-to-cart-form').serializeArray(),
            success: function (data) {

                $('#add-to-cart-form #chosen_price_div').removeClass('d-none');
                $('#add-to-cart-form #chosen_price_div #chosen_price').html(data.price);
                $('#set-discount-amount').html(data.discount);
                $('.product-tax-show').html(data.tax);

                let stockOutMessage = $('#message-stock-out').data('text');
                let stockInMessage = $('#message-stock-id').data('text');
                let elementStockStatusInQuickView = $('.stock-status-in-quick-view');

                if (data.quantity <= 0) {
                    elementStockStatusInQuickView.removeClass('text-success').addClass('text-danger');
                    elementStockStatusInQuickView.html(`<i class="tio-checkmark-circle-outlined"></i> ` + stockOutMessage);
                } else {
                    elementStockStatusInQuickView.removeClass('text-danger').addClass('text-success');
                    elementStockStatusInQuickView.html(`<i class="tio-checkmark-circle-outlined"></i> `+ stockInMessage);
                }

                if (data.inCartStatus == 0) {
                    $('.quick-view-modal-add-cart-button').text($('#message-add-to-cart').data('text'));
                    $('.in-cart-quantity-system').addClass("d--none").removeClass('d-flex');
                    $('.default-quantity-system').removeClass("d--none").addClass('d-flex');
                } else {
                    $('.default-quantity-system').addClass("d--none").removeClass('d-flex');
                    $('.in-cart-quantity-system').removeClass("d--none").addClass('d-flex');
                    $('.quick-view-modal-add-cart-button').text($('#message-update-to-cart').data('text'));
                    if (type == null) {
                        $('.in-cart-quantity-field').val(data.inCartData.quantity);
                        $('.in-cart-chosen_price').text(data.inCartData.price);
                        data.inCartData.quantity == 1 ? $('.in-cart-quantity-minus').attr('disabled', true) : '';
                    } else {
                        $('.in-cart-chosen_price').text(data.price);
                    }
                }

            }
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        });
    }
}

<<<<<<< HEAD
function addToCart(form_id = "add-to-cart-form") {
    if (checkAddToCartValidity()) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
            },
        });
        $.post({
            url: $("#route-vendor-pos-add-to-cart").data("url"),
            data: $("#" + form_id).serializeArray(),
            beforeSend: function () {
                $("#loading").fadeIn();
            },
            success: function (data) {
                if (data.data == 1) {
                    $("#cart-summary").empty().html(data.view);
                    toastr.success($("#message-cart-updated").data("text"), {
                        CloseButton: true,
                        ProgressBar: true,
                    });
                    data.inCartData && data.inCartData == 1
                        ? $(".in-cart-quantity-field").val(data.requestQuantity)
                        : "";
=======
function addToCart(form_id = 'add-to-cart-form') {
    if (checkAddToCartValidity()) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.post({
            url: $('#route-vendor-pos-add-to-cart').data('url'),
            data: $('#' + form_id).serializeArray(),
            beforeSend: function () {
                $('#loading').fadeIn();
            },
            success: function (data) {

                if (data.data == 1) {
                    $('#cart-summary').empty().html(data.view);
                    toastr.success($('#message-cart-updated').data('text'), {
                        CloseButton: true,
                        ProgressBar: true
                    });
                    data.inCartData && data.inCartData == 1 ? $('.in-cart-quantity-field').val(data.requestQuantity) : '';
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                    removeFromCart();
                    basicFunctionalityForCartSummary();
                    return false;
                } else if (data.data == 0) {
                    Swal.fire({
<<<<<<< HEAD
                        icon: "error",
                        title: $("#message-cart-word").data("text"),
                        text: $("#message-sorry-product-is-out-of-stock").data(
                            "text"
                        ),
                    });
                    return false;
                } else {
                    $(".in-cart-quantity-field").val(data.quantity);
                    getVariantPrice();
                    setTimeout(function () {
                        $(".cart-qty-field").val(1);
                    }, 500);
                }
                $(".call-when-done").click();

                toastr.success(
                    $("#message-item-has-been-added-in-your-cart").data("text"),
                    {
                        CloseButton: true,
                        ProgressBar: true,
                    }
                );
                $("#cart").empty().html(data.view);
                viewAllHoldOrders("keyup");
                $(".search-result-box").empty().hide();
                $("#search").val("");
=======
                        icon: 'error',
                        title: $('#message-cart-word').data('text'),
                        text: $('#message-sorry-product-is-out-of-stock').data('text')
                    });
                    return false;
                }
                $('.call-when-done').click();

                toastr.success($('#message-item-has-been-added-in-your-cart').data('text'), {
                    CloseButton: true,
                    ProgressBar: true
                });
                $('#cart').empty().html(data.view);
                viewAllHoldOrders('keyup');
                $('.search-result-box').empty().hide();
                $('#search').val('');
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                basicFunctionalityForCartSummary();
                posUpdateQuantityFunctionality();
                removeFromCart();
            },
            complete: function () {
<<<<<<< HEAD
                $("#loading").fadeOut();
            },
        });
    } else {
        Swal.fire({
            type: "info",
            title: $("#message-cart-word").data("text"),
            text: $("#message-please-choose-all-the-options").data("text"),
        });
    }
}
function removeFromCart() {
    $(".remove-from-cart").on("click", function () {
        let id = $(this).data("id");
        let variant = $(this).data("variant");
        $.post(
            $("#route-vendor-pos-remove-cart").data("url"),
            {
                _token: $('meta[name="_token"]').attr("content"),
                id: id,
                variant: variant,
            },
            function (data) {
                $("#cart").empty().html(data.view);
                if (data.errors) {
                    for (
                        let increment = 0;
                        increment < data.errors.length;
                        increment++
                    ) {
                        toastr.error(data.errors[increment].message, {
                            CloseButton: true,
                            ProgressBar: true,
                        });
                    }
                } else {
                    toastr.info(
                        $("#message-item-has-been-removed-from-cart").data(
                            "text"
                        ),
                        {
                            CloseButton: true,
                            ProgressBar: true,
                        }
                    );
                    viewAllHoldOrders("keyup");
                }
                posUpdateQuantityFunctionality();
                basicFunctionalityForCartSummary();
                posUpdateQuantityFunctionality();
                removeFromCart();
            }
        );
    });
=======
                $('#loading').fadeOut();
            }
        });
    } else {
        Swal.fire({
            type: 'info',
            title: $('#message-cart-word').data('text'),
            text: $('#message-please-choose-all-the-options').data('text')
        });
    }
}
function removeFromCart(){
    $('.remove-from-cart').on('click',function (){
        let id = $(this).data('id');
        $.post($('#route-vendor-pos-remove-cart').data('url'), {
            _token: $('meta[name="_token"]').attr('content'),
            id: id
        }, function (data) {
            $('#cart').empty().html(data.view);
            if (data.errors) {
                for (let increment = 0; increment < data.errors.length; increment++) {
                    toastr.error(data.errors[increment].message, {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            } else {
                toastr.info($('#message-item-has-been-removed-from-cart').data('text'), {
                    CloseButton: true,
                    ProgressBar: true
                });
                viewAllHoldOrders('keyup');
            }
            posUpdateQuantityFunctionality();
            basicFunctionalityForCartSummary();
            posUpdateQuantityFunctionality();
            removeFromCart();
        });
    })
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
}
removeFromCart();

$(".js-example-matcher").select2({
<<<<<<< HEAD
    matcher: matchCustom,
});

function matchCustom(params, data) {
    if ($.trim(params.term) === "") {
        return data;
    }
    if (typeof data.text === "undefined") {
=======
    matcher: matchCustom
});

function matchCustom(params, data) {
    if ($.trim(params.term) === '') {
        return data;
    }
    if (typeof data.text === 'undefined') {
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        return null;
    }
    if (data.text.indexOf(params.term) > -1) {
        let modifiedData = $.extend({}, data, true);
<<<<<<< HEAD
        modifiedData.text += " (matched)";
=======
        modifiedData.text += ' (matched)';
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        return modifiedData;
    }
    return null;
}
