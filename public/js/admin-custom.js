
// get subcategory
function get_sub_categories(val) {
    var data = {
        "parent_id": val
    };
    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: base_url + "post/get-subcategory",
        data: data,
        success: function (response) {
            $('#subcategories').children('option:not(:first)').remove();
            $("#subcategories").append(response);
        }
    });
}

// function get_parent_categories_by_lang(val) {
//     var data = {
//         "lang_id": val
//     };
//     data[csfr_token_name] = $.cookie(csfr_cookie_name);

//     $.ajax({
//         type: "POST",
//         url: base_url + "category_controller/get_parent_categories_by_lang",
//         data: data,
//         success: function (response) {
//             $('#categories').children('option:not(:first)').remove();
//             $('#subcategories').children('option:not(:first)').remove();
//             $("#categories").append(response);
//         }
//     });
// }

// function get_menu_links_by_lang(val) {
//     var data = {
//         "lang_id": val
//     };
//     data[csfr_token_name] = $.cookie(csfr_cookie_name);

//     $.ajax({
//         type: "POST",
//         url: base_url + "admin_controller/get_menu_links_by_lang",
//         data: data,
//         success: function (response) {
//             $('#parent_links').children('option:not(:first)').remove();
//             $("#parent_links").append(response);
//         }
//     });
// }

//datetimepicker
// $(function () {
//     $('#datetimepicker').datetimepicker({
//         format: 'YYYY-MM-DD HH:mm:ss'
//     });
// });


/*
*
* Video Upload Functions
*
* */

$("#video_embed_code").on("input change keyup paste", function () {
    var embed_code = $("#video_embed_code").val();
    $("#video_preview").attr('src', embed_code);
    if ($("#video_embed_code").val() == '') {
        $("#video_embed_preview").attr('src', '');
        $("#video_embed_preview").hide();
    }
});


//check all checkboxes
// $("#checkAll").click(function () {
//     $('input:checkbox').not(this).prop('checked', this.checked);
// });

//show hide delete button
$('.checkbox-table').on('ifChecked',function () {
    if ($(".checkbox-table").is(':checked')) {
        $(".btn-table-delete").show();
    } else {
        $(".btn-table-delete").hide();
    }
});
$('.checkbox-table').on('ifUnchecked',function () {
    $(".btn-table-delete").hide();
});

//post bulk options
function post_bulk_options(operation) {
    var post_ids = [];

    $("input[name='checkbox-table']:checked").each(function () {
        post_ids.push(this.value);
    });
    var data = {
        'operation': operation,
        'post_ids': post_ids,
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);
    $.ajax({
        type: "POST",
        url: base_url + "post_controller/post_bulk_options",
        data: data,
        success: function (response) {
            location.reload();
        }
    });
};

//approve selected comments
function approve_selected_comments() {
    var comment_ids = [];
    $("input[name='checkbox-table']:checked").each(function () {
        comment_ids.push(this.value);
    });
    var data = {
        'comment_ids': comment_ids,
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);
    $.ajax({
        type: "POST",
        url: base_url + "admin_controller/approve_selected_comments",
        data: data,
        success: function (response) {
            location.reload();
        }
    });
};

//delete selected comments
function delete_selected_comments(message) {
    swal({
        text: message,
        icon: "warning",
        buttons: [sweetalert_cancel, sweetalert_ok],
        dangerMode: true,
    }).then(function (willDelete) {
        if (willDelete) {
            var comment_ids = [];
            $("input[name='checkbox-table']:checked").each(function () {
                comment_ids.push(this.value);
            });
            var data = {
                'comment_ids': comment_ids,
            };
            data[csfr_token_name] = $.cookie(csfr_cookie_name);
            $.ajax({
                type: "POST",
                url: base_url + "admin_controller/delete_selected_comments",
                data: data,
                success: function (response) {
                    location.reload();
                }
            });
        }
    });
};

//delete selected contact messages
function delete_selected_contact_messages(message) {
    swal({
        text: message,
        icon: "warning",
        buttons: [sweetalert_cancel, sweetalert_ok],
        dangerMode: true,
    }).then(function (willDelete) {
        if (willDelete) {
            var messages_ids = [];
            $("input[name='checkbox-table']:checked").each(function () {
                messages_ids.push(this.value);
            });
            var data = {
                'messages_ids': messages_ids,
            };
            data[csfr_token_name] = $.cookie(csfr_cookie_name);
            $.ajax({
                type: "POST",
                url: base_url + "admin_controller/delete_selected_contact_messages",
                data: data,
                success: function (response) {
                    location.reload();
                }
            });
        }
    });
};

//delete post main image
$(document).on('click', '#btn_delete_post_main_image', function () {
    var content = '<a class="btn-select-image" data-bs-toggle="modal" data-bs-target="#file_manager_image" data-image-type="main">' +
        '<div class="btn-select-image-inner">' +
        '<i class="bx bx-images"></i>' +
        '<button class="btn">' + txt_select_image + '</button>' +
        '</div>' +
        '</a>';
    document.getElementById("post_select_image_container").innerHTML = content;
    $("#post_image_id").val('');
    $("#video_thumbnail_url").val('');
});

//delete post main image database
$(document).on('click', '#btn_delete_post_main_image_database', function () {
    var data = {
        "post_id": $(this).attr("data-post-id")
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);
    $.ajax({
        type: "POST",
        url: base_url + "post_controller/delete_post_main_image",
        data: data,
        success: function (response) {
            var content = '<a class="btn-select-image" data-toggle="modal" data-target="#file_manager_image" data-image-type="main">' +
                '<div class="btn-select-image-inner">' +
                '<i class="bx bx-images"></i>' +
                '<button class="btn">' + txt_select_image + '</button>' +
                '</div>' +
                '</a>';
            document.getElementById("post_select_image_container").innerHTML = content;
            $("#post_image_id").val('');

            $("#video_thumbnail_url").val('');
            document.getElementById("post_selected_video").innerHTML = " ";
            $(".btn-delete-post-video").hide();
        }
    });


});

//delete additional image
$(document).on('click', '.btn-delete-additional-image', function () {
    var item_id = $(this).attr("data-value");
    $('.additional-item-' + item_id).remove();
});

//delete additional image from database
$(document).on('click', '.btn-delete-additional-image-database', function () {
    var item_id = $(this).attr("data-value");
    $('.additional-item-' + item_id).remove();
    var data = {
        "file_id": item_id
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);
    $.ajax({
        type: "POST",
        url: base_url + "post_controller/delete_post_additional_image",
        data: data,
        success: function (response) {
        }
    });
});


//delete selected audio
$(document).on('click', '.btn-delete-selected-audio', function () {
    var item_id = $(this).attr("data-value");
    $('#audio_' + item_id).remove();
});

//delete selected audio from database
$(document).on('click', '.btn-delete-selected-audio-database', function () {
    var post_audio_id = $(this).attr("data-value");
    $('#post_selected_audio_' + post_audio_id).remove();
    var data = {
        'post_audio_id': post_audio_id
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);
    $.ajax({
        type: "POST",
        url: base_url + "post_controller/delete_post_audio",
        data: data,
        success: function (response) {
        }
    });
});

$('.increase-count').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 1000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

//confirm user email
function confirm_user_email(id) {
    var data = {
        'id': id,
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);
    $.ajax({
        type: "POST",
        url: base_url + "admin_controller/confirm_user_email",
        data: data,
        success: function (response) {
            location.reload();
        }
    });
};

//delete item
function delete_item(url, id, message) {
    swal({
        text: message,
        icon: "warning",
        buttons: [sweetalert_cancel, sweetalert_ok],
        dangerMode: true,
    }).then(function (willDelete) {
        if (willDelete) {
            var data = {
                'id': id,
            };
            data[csfr_token_name] = $.cookie(csfr_cookie_name);
            $.ajax({
                type: "POST",
                url: base_url + url,
                data: data,
                success: function (response) {
                    location.reload();
                }
            });
        }
    });
};

//enable or disable reward system
function enable_disable_reward_system(id) {
    var data = {
        'id': id
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);
    $.ajax({
        type: "POST",
        url: base_url + "reward_controller/enable_disable_reward_system",
        data: data,
        success: function (response) {
            location.reload();
        }
    });
}

//ban user
function ban_user(id, message, option) {
    swal({
        text: message,
        icon: "warning",
        buttons: [sweetalert_cancel, sweetalert_ok],
        dangerMode: true,
    }).then(function (willDelete) {
        if (willDelete) {
            var data = {
                'id': id,
                'option': option
            };
            data[csfr_token_name] = $.cookie(csfr_cookie_name);
            $.ajax({
                type: "POST",
                url: base_url + "admin_controller/ban_user_post",
                data: data,
                success: function (response) {
                    location.reload();
                }
            });
        }
    });
};

function get_albums_by_lang(val) {
    var data = {
        "lang_id": val
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);

    $.ajax({
        type: "POST",
        url: base_url + "gallery_controller/gallery_albums_by_lang",
        data: data,
        success: function (response) {
            $('#albums').children('option:not(:first)').remove();
            $("#albums").append(response);
        }
    });
}

$('.price-input').keypress(function (event) {
    var $this = $(this);
    if ((event.which != 46 || $this.val().indexOf('.') != -1) &&
        ((event.which < 48 || event.which > 57) &&
            (event.which != 0 && event.which != 8))) {
        event.preventDefault();
    }
    var text = $(this).val();
    if ((text.indexOf('.') != -1) &&
        (text.substring(text.indexOf('.')).length > 2) &&
        (event.which != 0 && event.which != 8) &&
        ($(this)[0].selectionStart >= text.length - 2)) {
        event.preventDefault();
    }
});

//upload product image update page
$(document).on('change', '#Multifileupload', function () {
    var MultifileUpload = document.getElementById("Multifileupload");
    if (typeof (FileReader) != "undefined") {
        var MultidvPreview = document.getElementById("MultidvPreview");
        MultidvPreview.innerHTML = "";
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        for (var i = 0; i < MultifileUpload.files.length; i++) {
            var file = MultifileUpload.files[i];
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = document.createElement("IMG");
                img.height = "100";
                img.width = "100";
                img.src = e.target.result;
                img.id = "Multifileupload_image";
                MultidvPreview.appendChild(img);
                $("#Multifileupload_button").show();
            }
            reader.readAsDataURL(file);
        }
    } else {
        alert("This browser does not support HTML5 FileReader.");
    }
});

$(document).ajaxStop(function () {

    $('input[type="checkbox"].polaris, input[type="radio"].polaris').iCheck({
        checkboxClass: 'icheckbox_polaris',
        radioClass: 'iradio_polaris',
        increaseArea: '20%' // optional
    });

    // $('#cb_scheduled').on('ifChecked', function () {
    //     $("#date_published_content").show();
    //     $("#input_date_published").prop('required', true);
    // });
    // $('#cb_scheduled').on('ifUnchecked', function () {
    //     $("#date_published_content").hide();
    //     $("#input_date_published").prop('required', false);
    // });

});