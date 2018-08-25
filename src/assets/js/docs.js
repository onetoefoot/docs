$( document ).ready(function() {
    $("#docs-menu-toggle").click(function(e) {
        e.preventDefault();
        $("#docs-sidebar").toggleClass("active");
        $("#docs-menu-toggle").toggleClass("active");
    });
});
