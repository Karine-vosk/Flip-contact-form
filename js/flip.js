$('.turn').click(function(event){
    let doValidate = false;
    let empty = false;
    let flip = $('.contain-contact').hasClass('flipping');
    let email = $('.inp-email').val();

   // event.preventDefault();
    if($(this).hasClass('btn-subm')){
        doValidate = true;
        event.preventDefault();

    }

    if(doValidate){
        let inp = $('.err-inp');

        $(inp).each(function(){
            if($(this).val()=== ''){
                empty= true;
                $(this).next().addClass('show');
            }
           else if(isEmail(email)=== false) {
                $('.inp-email').next().addClass('show');
                return false;
            }
         else{
                $(this).next().removeClass('show');
            }

        })

    }
         if(!empty){
            $('.contain-contact').toggleClass('flipping');
             if( isEmail(email)=== false && flip ===true) {
                 $('.contain-contact').toggleClass('flipping');

                 return false;
             }
             else if (flip === false){
                document.querySelector("form").reset();
             }

         }



       /* if(!empty){
        $('.contain-contact').toggleClass('flipping');

        if( isEmail(email)==false && flip ===true) {
            $('.contain-contact').toggleClass('flipping');
            return false;
        }
     }*/


});



$('.err-inp').focusout(function(){
    let email = $('.inp-email').val();
    let inpVal = $(this).val();

    if (inpVal === '' ) {
        $(this).next().addClass('show');
    }
    else if($(this).hasClass("inp-email") && isEmail(email) === false){
        $('.inp-email').next().addClass('show');
        return false;
    }
    else {
        $(this).next().removeClass('show');
           }
});

function isEmail(email) {
    let regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(!regex.test(email)) {
        return false;
    }else{
        return true;
    }
}

