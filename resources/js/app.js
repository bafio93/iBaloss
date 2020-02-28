require('./bootstrap');
var $ = require("jquery");
$(document).ready(function(){
    $("i").click(function(){
        if ($(this).parent("h3").next().hasClass("baf-answer")) {
            $(".baf-questionbox p").addClass("baf-answer");
            $(this).parent("h3").next().toggleClass("baf-answer");
        } else {
            $(this).parent("h3").next().toggleClass("baf-answer");
        }
    })
});
