$(document).ready(function() {
    $(".menu-toggle").on("click", function() {
        $(".nav").toggleClass("showing");
        $(".nav ul").toggleClass("showing");
    });

    $(".post-wrapper").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $(".next"),
        prevArrow: $(".prev"),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1
                }
            }
        ]
    });

    $(".comment-container").delegate(".reply", "click", function() {
        var well = $(this)
            .parent()
            .parent();
        var cid = $(this).attr("cid");
        // var name = $(this).attr("name_a");
        var name = "ismael";
        var token = $(this).attr("token");
        var form =
            '<form method="post" action="/replies"><input type="hidden" name="_token" value="' +
            token +
            '"><input type="hidden" name="comment_id" value="' +
            cid +
            '"><input type="text" name="name" value="' +
            name +
            '"><div class="form-group"><textarea class="form-control" name="reply" placeholder="Enter your reply" > </textarea> </div> <div class="form-group"> <input class="btn btn-primary" type="submit"> </div></form>';
        console.log(form);
        well.find(".reply-form").append(form);
    });

    // $(".comment-content").append(".well");

    $(".comment-container").delegate(".delete-comment", "click", function() {
        var cdid = $(this).attr("comment-did");
        var token = $(this).attr("token");
        var well = $(this)
            .parent()
            .parent();
        var result = $.ajax({
            url: "comments/" + cdid,
            method: "POST",
            data: { _method: "delete", _token: token },
            success: function(response) {
                if (response == 1 || response == 2) {
                    well.hide();
                } else {
                    alert("Oh ! you can delete only your comment");
                    console.log(response);
                }
            }
        });
        result.done(function(msg) {
            console.log(msg);
        });
    });

    $(".comment-container").delegate(".reply-to-reply", "click", function() {
        var well = $(this)
            .parent()
            .parent();
        var cid = $(this).attr("rid");
        // var rname = $(this).attr("rname");
        var token = $(this).attr("token");
        var form =
            '<form method="post" action="replies"><input type="hidden" name="_token" value="' +
            token +
            '"><input type="hidden" name="comment_id" value="' +
            cid +
            '"><input type="hidden" name="name" value="' +
            rname +
            '"><div class="form-group"><textarea class="form-control" name="reply" placeholder="Enter your reply" > </textarea> </div> <div class="form-group"> <input class="btn btn-primary" type="submit"> </div></form>';

        well.find(".reply-to-reply-form").append(form);
    });

    $(".comment-container").delegate(".delete-reply", "click", function() {
        var well = $(this)
            .parent()
            .parent();

        if (confirm("Are you sure you want to delete this..!")) {
            var did = $(this).attr("did");
            var token = $(this).attr("token");
            var result = $.ajax({
                url: "replies/" + did,
                method: "POST",
                data: { _method: "delete", _token: token },
                success: function(response) {
                    if (response == 1) {
                        well.hide();
                        //alert("Your reply is deleted");
                    } else if (response == 2) {
                        alert("Oh! You can not delete other people comment");
                    } else {
                        alert("Something wrong in project setup");
                    }
                }
            });
            result.done(function(msg) {
                console.log(msg);
            });
        }
    });
});

// ClassicEditor.create(document.querySelector("#body"), {
//     toolbar: [
//         "heading",
//         "|",
//         "bold",
//         "italic",
//         "link",
//         "alignment:left",
//         "alignment:right",
//         "alignment:center",
//         "alignment:justify",
//         "numberedList",
//         "blockQuote",
//         "imageUpload",
//         "undo"
//     ],
//     heading: {
//         options: [
//             {
//                 model: "paragraph",
//                 title: "Paragraph",
//                 class: "ck-heading_paragraph"
//             },
//             {
//                 model: "heading1",
//                 view: "h1",
//                 title: "Heading 1",
//                 class: "ck-heading_heading1"
//             },
//             {
//                 model: "heading2",
//                 view: "h2",
//                 title: "Heading 2",
//                 class: "ck-heading_heading2"
//             }
//         ]
//     }
// }).catch(error => {
//     console.log(error);
// });

tinymce.init({
    selector: "#body",
    plugins: "lists | code | tabfocus | spellchecker | emoticons",
    toolbar:
        "numlist bullist outdent indent| fontselect | spellchecker | emoticons | link image",
    content_css: ["https://fonts.googleapis.com/css?family=Lora&display=swap"],
    font_formats: "Lora=lora,Times New Roman=times new roman,times;"
});

tinymce.init({
    selector: "#title",
    plugins: "lists",
    toolbar: "numlist bullist outdent indent| fontselect ",
    content_css: ["https://fonts.googleapis.com/css?family=Lora&display=swap"]
});

// tinymce.init({
//     height: 500,
//     plugins: "code",
//     toolbar: "undo redo | fontsizeselect fontselect",
//     content_css: ["//fonts.googleapis.com/css?family=Indie+Flower"],
//     font_formats:
//         "Arial Black=arial black,avant garde;Indie Flower=indie flower, cursive;Times New Roman=times new roman,times;"
// });
