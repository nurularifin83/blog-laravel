$(document).ready(function() {

    // Display image
    $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    // tinymce setup
    $(document).ready(function() {
        0 < $("#input_tinymce").length && tinymce.init({
            selector: "textarea#input_tinymce",
            height: 600,
            plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [{
                title: "Bold text",
                inline: "b"
            }, {
                title: "Red text",
                inline: "span",
                styles: {
                    color: "#ff0000"
                }
            }, {
                title: "Red header",
                block: "h1",
                styles: {
                    color: "#ff0000"
                }
            }, {
                title: "Example 1",
                inline: "span",
                classes: "example1"
            }, {
                title: "Example 2",
                inline: "span",
                classes: "example2"
            }, {
                title: "Table styles"
            }, {
                title: "Table row 1",
                selector: "tr",
                classes: "tablerow1"
            }]
        })
    });

    // Validate filed is required
    $('#portfolioForm').validate({
        rules: {
            portfolio_name: {
                required: true
            },
            portfolio_title: {
                required: true
            },
            portfolio_image: {
                required: true
            }
        },
        messages: {
            portfolio_name: {
                required: 'The Name is required!'
            },
            portfolio_title: {
                required: 'The Title is required!'
            },
            portfolio_image: {
                required: 'The Image is required!'
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});

// Confirm delete message
$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: "btn btn-info ms-3",
              cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
          });
          swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                swalWithBootstrapButtons.fire({
                    title: "Deleted!",
                    text: "Your data has been deleted.",
                    icon: "success"
                });
            }
        });
    });
    
});

/**
 * Add post
 */
const categories_right_side = document.getElementById('categories_right_side');
const linkAddNew1 = document.getElementById('link-add-new-1');
const linkAddNew2 = document.getElementById('link-add-new-2');

const setFeaturedImageLink = document.getElementById('set-featured-image-link');
const removeFeaturedImage = document.getElementById('remove-featured-image');
const image = document.getElementById('image');
const displayFeaturedImage = document.getElementById('display-featured-image');
const showImage = document.querySelector('#showImage');

linkAddNew1.addEventListener('click', () => {
    categories_right_side.style.display = 'block';
    linkAddNew1.style.display = 'none';
    linkAddNew2.style.display = 'block';
});

linkAddNew2.addEventListener('click', () => {
    categories_right_side.style.display = 'none';
    linkAddNew1.style.display = 'block';
    linkAddNew2.style.display = 'none';
});

setFeaturedImageLink.addEventListener('click', () => {
    
    setFeaturedImageLink.style.display = 'none';
    displayFeaturedImage.style.display = 'block';
    removeFeaturedImage.style.display = 'block';

});

removeFeaturedImage.addEventListener('click', () => {
    setFeaturedImageLink.style.display = 'block';
    displayFeaturedImage.style.display = 'none';
    removeFeaturedImage.style.display = 'none';
});

/**
 * Validate text field
 */

// $(document).ready(function() {
//     $('#portfolioForm').validate({
//         rules: {
//             portfolio_name: {
//                 required: true
//             },
//             portfolio_title: {
//                 required: true
//             },
//             portfolio_image: {
//                 required: true
//             }
//         },
//         messages: {
//             portfolio_name: {
//                 required: 'The Name is required!'
//             },
//             portfolio_title: {
//                 required: 'The Title is required!'
//             },
//             portfolio_image: {
//                 required: 'The Image is required!'
//             }
//         },
//         errorElement: 'span',
//         errorPlacement: function(error, element) {
//             error.addClass('invalid-feedback');
//             element.closest('.form-group').append(error);
//         },
//         highlight: function(element, errorClass, validClass) {
//             $(element).addClass('is-invalid');
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).removeClass('is-invalid');
//         }
//     });
// });