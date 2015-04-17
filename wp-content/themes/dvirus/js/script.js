$(document).ready(function() {
    $("#cat-nav ul li:not(:has(#cat-nav li ul.children))").find("ul.children").hide().end() // Hide all other ULs
    .find(' > a').click(function(e) {
        if (this == e.target) {
            e.preventDefault();  // if the handler element is where the event originated
            $(this).parent('li.cat-item').children('ul.children').slideToggle('fast');
        }
    });
});
