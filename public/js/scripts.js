new DataTable("#product-list");
new DataTable("#category-list");
new DataTable("#order-list");
new DataTable("#customer-list");

$(function () {
    $("#flexSwitchStock")
        .on("change", function () {
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        })
        .change();

    $(".datepicker").datepicker();

    // $(".saveProduct").click(function () {
    //     var productName = $('input[name="product_name"]').val();
    //     var description = $('textarea[name="description"]').val();
    //     var mainImage = $('input[name="main_image"]').val();
    //     var image = $('input[name="image"]').val();
    //     var isStock = $('input[name="is_stock"]').val();
    //     var productCode = $('input[name="product_code"]').val();
    //     var stock = $('input[name="stock"]').val();
    //     var categoryId = $('select[name="category_id"]').val();
    //     var tags = $('input[name="tags"]').val();
    //     var status = $('select[name="status"]').val();
    //     var price = $('input[name="price"]').val();
    //     var salePrice = $('input[name="sale_price"]').val();

    //     $.ajax({
    //         type: "POST",
    //         enctype: 'multipart/form-data',
    //         url: $("#productModal").attr("save-action"),

    //         dataType: 'json',

    //         headers: {
    //             "X-CSRF-TOKEN": $("#productModal").attr("token"),
    //         },
    //         data: {
    //             product_name: productName,
    //             description: description,
    //             main_image: mainImage,
    //             image: image,
    //             is_stock: isStock,
    //             product_code: productCode,
    //             stock: stock,
    //             category_id: categoryId,
    //             tags: tags,
    //             status: status,
    //             price: price,
    //             sale_price: salePrice,
    //         },
    //         success: function (responce) {
    //             // console.log(responce);
    //             if (responce.status == 200) {
    //                 $("#productModal").modal("hide");

    //                 Swal.fire({
    //                     icon: "success",
    //                     title: "Success",
    //                     text: responce.message,
    //                 });
    //                 setTimeout(function () {
    //                     location.reload();
    //                 }, 2000);
    //             }
    //         },
    //     });
    // });

    $(".saveCategory").click(function () {
        var categoryName = $('input[name="category_name"]').val();
        var categoryImage = $('input[name="category_image"]');

        $.ajax({
            type: "POST",
            url: $("#categoryModal").attr("save-action"),
            enctype: "multipart/form-data",
            dataType: "",
            headers: {
                "X-CSRF-TOKEN": $("#categoryModal").attr("token"),
            },
            data: {
                category_name: categoryName,
                category_image: categoryImage,
            },
            success: function (responce) {
                // console.log(responce);
                if (responce.status == 200) {
                    $("#categoryModal").modal("hide");

                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: responce.message,
                    });
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
            },
        });
    });
    // category inside
    $(".saveCategoryInside").click(function () {
        var categoryName = $('input[name="category_name_inside"]').val();
        var categoryImage = $('input[name="category_image_inside"]').val();

        $.ajax({
            type: "POST",
            enctype: "multipart/form-data",
            url: $("#categoryModalInside").attr("save-action"),
            headers: {
                "X-CSRF-TOKEN": $("#categoryModal").attr("token"),
            },
            data: {
                category_name: categoryName,
                category_image: categoryImage,
            },
            success: function (responce) {
                // console.log(responce);
                if (responce.status == 200) {
                    $("#categoryModalInside").modal("hide");

                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        timer: 2000,
                        text: responce.message,
                    });
                }
            },
        });
    });

    //delete confirm

    $(".confirm-delete").click(function (event) {
        var form = $(this).closest("form");
        event.preventDefault();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    // Make an AJAX DELETE request to delete the file
                    $.ajax({
                        type: "DELETE",
                        url: form.attr("action"), // Use the form's action attribute as the URL
                        data: form.serialize(),
                        success: function (response) {
                            if (response.status === 200) {
                                swalWithBootstrapButtons.fire(
                                    "Deleted!",
                                    response.message,
                                    "success"
                                );
                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                                // You can add additional logic here, e.g., updating the UI
                            } else {
                                // Handle other response statuses (e.g., 404, 500, etc.) here
                                swalWithBootstrapButtons.fire(
                                    "Error",
                                    response.message,
                                    "error"
                                );
                            }
                        },
                        error: function () {
                            // Handle AJAX error here
                            swalWithBootstrapButtons.fire(
                                "Error",
                                "Failed to delete the file.",
                                "error"
                            );
                        },
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Cancelled",
                        "Your Product is safe :)",
                        "error"
                    );
                }
            });
    });

    $("select[name=category_id]").focus(function () {
        var category_id = $(this).val();
        $.ajax({
            type: "GET",
            url: $("#productModal").attr("fetch-categories"),
            dataType: "JSON",
            success: function (response) {
                var optionHtml = "";
                for (let i = 0; i < response.data.length; i++) {
                    const element = response.data[i];
                    optionHtml +=
                        `<option value='` +
                        element.category_id +
                        `'>` +
                        element.category_name +
                        `</option>`;
                }
                // console.log(optionHtml);
                $("select[name=category_id]").html(optionHtml);
            },
        });
    });
});
