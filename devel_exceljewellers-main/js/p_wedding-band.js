$(document).ready(function(){$(".image_upload").change(function(e){document.getElementById("output").src=URL.createObjectURL(e.target.files[0])}),$(".other-img").on("error",function(){$(this).parent().remove()}),$(".size-btn").click(function(e){$(this).css({border:"solid 1px #7df048"}).addClass("selected_size"),$(".size-btn").not(this).css({border:"solid 1px #e6e6e6"}).removeClass("selected_size")}),$(".favourite").click(function(){$.ajax({url:"../favourite",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",data:{sku:$("span.item_sku").text(),link:$(location).attr("href"),img:$(".main-image-session").attr("src")},success:function(e){popup("green","Added To Wish List")},error:function(e,t,n){popup("error")}})}),$(".add-to-cart").click(function(){null!=$("select").val()?$.ajax({url:"../add-cart",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",data:{sku:$("span.item_sku").text(),engraving:$("input[name=engraving]").val()||null,img:$(".main-image-session").attr("src")||null,size:$("select").val()||null,url:window.location.href,type:"wedding-band"},success:function(e){var t,n;popup("green","Added To Cart"),t=$(".main-image-session").attr("src"),n=$(".wedding-name").text(),$(".add-cart-notification").fadeIn().delay(3e3).fadeOut("fast"),$(".img-notification").attr("src",t),$(".add-cart-name").text(n),$.ajax({url:"../shop-cart-num",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",success:function(e){$(".cart-text").empty().append(e)},error:function(e,t,n){}})},error:function(e,t,n){popup("error")}}):popup("green","Please Select Ring Size")}),$(document).on("click",".notification-close",function(){$(".add-cart-notification").remove()}),$(".main-carousel").flickity({cellAlign:"left",contain:!0,pageDots:!1,imagesLoaded:!0,asNavFor:".carousel-main"})});