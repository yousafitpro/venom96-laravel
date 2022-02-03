


// jQuery(document).ready(function($) {
//     setTimeout(function() {
//       $('#lab-slide-bottom-popup').modal('show');
//     }, 5000); 
  
//     $(document).ready(function() {
//       $('.lab-slide-up').find('a').attr('data-toggle', 'modal');
//       $('.lab-slide-up').find('a').attr('data-target', '#lab-slide-bottom-popup');
//     });
  
//   });


function closeForm() {
  document.getElementById("modal-window").style.display = "none";
}
 /********************* Load More **********************/

  $(document).ready(function(){
  $(".content").slice(0, 4).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text(" ").addClass("noContent");
    }
  });
  
  })

  /********************* Counter **********************/

   $(document).ready(function(){
		    $('.count').prop('disabled', true);
   			$(document).on('click','.plus',function(){
				$('.count').val(parseInt($('.count').val()) + 1 );
    		});
        	$(document).on('click','.minus',function(){
    			$('.count').val(parseInt($('.count').val()) - 1 );
    				if ($('.count').val() == 0) {
						$('.count').val(1);
					}
    	    	});
 		});