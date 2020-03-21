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
    toolbar: "numlist bullist | fontselect | spellchecker | emoticons",
    content_css: ["https://fonts.googleapis.com/css?family=Lora&display=swap"],
    font_formats: "Lora=lora,Times New Roman=times new roman,times;"
});

tinymce.init({
    selector: "#title",
    plugins: "lists",
    toolbar: "numlist bullist| fontselect ",
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
