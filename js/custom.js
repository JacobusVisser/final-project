//var acc = document.getElementsByClassName("accordion");
//var i;
//
//for (i = 0; i < acc.length; i++) {
//	acc[i].onclick = function() {
//		this.classList.toggle("active");
//		var panel = this.nextElementSibling;
//		if (panel.style.maxHeight){
//			panel.style.maxHeight = null;
//		} else {
//			panel.style.maxHeight = panel.scrollHeight + "px";
//		} 
//	}
//}
//
//
//
//
//function dropdown1() {
//    document.getElementById("myDropdown1").classList.toggle("show");
//}
//
//function dropdown2() {
//    document.getElementById("myDropdown2").classList.toggle("show");
//}
//
//function dropdown3() {
//    document.getElementById("myDropdown3").classList.toggle("show");
//}
//
//function dropdown4() {
//    document.getElementById("myDropdown4").classList.toggle("show");
//}

$(document).ready(function(){
    $(".panel").hide();
    $("#nav_item_1").hover(function(){
        $("#myDropdown1").show();
    })
    $("#nav_item_1").mouseleave(function(){
        $("#myDropdown1").hide();
    })
    $("#myDropdown1").hover(function(){
        $(this).show();
    });
    
    $("#myDropdown1").mouseleave(function(){
        $(this).hide();
    });
    
    $("#nav_item_2").hover(function(){
        $("#myDropdown2").show();
    })
    $("#nav_item_2").mouseleave(function(){
        $("#myDropdown2").hide();
    })
    $("#myDropdown2").hover(function(){
        $(this).show();
    });
    
    $("#myDropdown2").mouseleave(function(){
        $(this).hide();
    });
    
    $("#nav_item_3").hover(function(){
        $("#myDropdown3").show();
    })
    $("#nav_item_3").mouseleave(function(){
        $("#myDropdown3").hide();
    })
    $("#myDropdown3").hover(function(){
        $(this).show();
    });
    
    $("#myDropdown3").mouseleave(function(){
        $(this).hide();
    });
    
    $("#nav_item_4").hover(function(){
        $("#myDropdown4").show();
    })
    $("#nav_item_4").mouseleave(function(){
        $("#myDropdown4").hide();
    })
    $("#myDropdown4").hover(function(){
        $(this).show();
    });
    
    $("#myDropdown4").mouseleave(function(){
        $(this).hide();
    });
    $("#item_1").click(function(){
        $("#list_1").slideToggle("slow");
        
    })
    $("#item_2").click(function(){
        $("#list_2").slideToggle("slow");
        
    })
    $("#item_3").click(function(){
        $("#list_3").slideToggle("slow");
        
    })
    $("#item_4").click(function(){
        $("#list_4").slideToggle("slow");
        
    })
    $("#item_5").click(function(){
        $("#list_5").slideToggle("slow");
        
    })
    $("#item_6").click(function(){
        $("#list_6").slideToggle("slow");
        
    })
    
    
    
    
    
    
})