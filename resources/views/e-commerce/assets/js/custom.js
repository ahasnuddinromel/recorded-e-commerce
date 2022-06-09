// ======================= Main BANNER SLIDER ==================
$('.slider').owlCarousel({
    items: 1,
    nav: true
});

// ======================= Search Bar option ==================
(function($){
    $(document).ready(function(){
        $('#bar').click(function(){
            $('#bars_options').toggle();
        });
        // $(document).click(function(){
        //     $('#bars_options').remove();
        // });
        
    });

})(jQuery)


// ======== add card minus-plus(for Sngle-product) ============
const plus = document.querySelector(".plus")
const minus = document.querySelector(".minus")
const num = document.querySelector(".num")

     let a = 1;

     plus.addEventListener("click", ()=> {
         a++;
         a = (a < 10) ? a : a;
         num.innerText = a;
         console.log(a);
     });

     minus.addEventListener("click", ()=> {
         if(a > 1){
             a--;
             a = (a < 10) ? a : a;
             num.innerText = a;
             console.log(a);
         }
    });

     
