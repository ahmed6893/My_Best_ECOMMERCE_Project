jQuery(document).ready(function() {
    $(".summernote").summernote({
        height: 190,
        minHeight: null,
        maxHeight: null,
        focus: !1
    }), $(".inline-editor").summernote({
        airMode: !0
    })
}), window.edit = function() {
    $(".click2edit").summernote()
}, window.save = function() {
    $(".click2edit").summernote("destroy")
};
$(document).ready(function() {
    if (typeof $.fn.summernote !== 'undefined') {
        $('.summernote').summernote({
            height: 300,
            placeholder: 'Enter long description here...'
        });
    } else {
        console.error("Summernote is not loaded properly.");
    }
});
