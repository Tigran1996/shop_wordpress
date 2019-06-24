
const nojs = jQuery.noConflict();
nojs(document).ready(function () {
    //burger menu
    nojs(".menu-main-menu-container").attr('id', 'menuid');
    var burgerMenu = document.getElementById('burger-menu');
    var overlay = document.getElementById('menuid');
    burgerMenu.addEventListener('click',function(){
        this.classList.toggle("close");
        overlay.classList.toggle("overlay");

    });
    nojs(document).on("click",function(){
        nojs(".overlay").css("overflow","hidden")
    })
    nojs(".hover").mouseleave(
        function () {
            nojs(this).removeClass("hover");
        }
    );

    // nojs(document).ready(function () {
    //     nojs(".addActive").on("click",function () {
    //         nojs(".register_form").toggleClass("active_reg")
    //     })
    // })
//burger end
// range
//     nojs( function() {
//         nojs( "#slider-range" ).slider({
//             range: true,
//             min: 0,
//             max: 8000,
//             values: [ 2375, 6000 ],
//             slide: function( event, ui ) {
//                 nojs( "#amount" ).val( "nojs" + ui.values[ 0 ] + " - nojs" + ui.values[ 1 ] );
//             }
//         });
//         nojs( "#amount" ).val( "nojs" + nojs( "#slider-range" ).slider( "values", 0 ) +
//             " - nojs" + nojs( "#slider-range" ).slider( "values", 1 ) );
//     } );

    // var password = document.getElementById("password")
    //     , confirm_password = document.getElementById("confirm_password");
    //
    // function validatePassword(){
    //     if(password.value != confirm_password.value) {
    //         confirm_password.setCustomValidity("Passwords Don't Match");
    //     } else {
    //         confirm_password.setCustomValidity('');
    //     }
    // }
    //
    // password.onchange = validatePassword;
    // confirm_password.onkeyup = validatePassword;

})


