jQuery(document).ready(function($) {
	//jQuery("div[data-elementor-id='498']").hide();
		$(".addtocartBtn input.qty").attr("readonly",true);
		var currenturl	=	window.location.href;
		
		if(currenturl.indexOf('#shop') ==	-1){
			if($("#home").length){
				var elmnt = document.getElementById("home");
				elmnt.scrollIntoView();	
				//$("#header-section").hide();
			}
		}
		
		if(currenturl.indexOf('#shop') !=	-1){
			jQuery('.shoplink a[href*="#shop"]').trigger('click')
		}
		
		var i = 0;
		var faceimagelibraries	=	["https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-1960x2048.png 1960w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-287x300.png 287w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-980x1024.png 980w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-768x802.png 768w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-1470x1536.png 1470w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-300x313.png 300w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-600x627.png 600w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine.png 2036w",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Acne-1960x2048.png 1960w, https://earthlyvibes.co/wp-content/uploads/2022/01/Acne-287x300.png 287w, https://earthlyvibes.co/wp-content/uploads/2022/01/Acne-980x1024.png 980w, https://earthlyvibes.co/wp-content/uploads/2022/01/Acne-768x802.png 768w, https://earthlyvibes.co/wp-content/uploads/2022/01/Acne-1470x1536.png 1470w, https://earthlyvibes.co/wp-content/uploads/2022/01/Acne-300x313.png 300w, https://earthlyvibes.co/wp-content/uploads/2022/01/Acne-600x627.png 600w, https://earthlyvibes.co/wp-content/uploads/2022/01/Acne.png 2036w",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth-1960x2048.png 1960w, https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth-287x300.png 287w, https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth-980x1024.png 980w, https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth-768x802.png 768w, https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth-1470x1536.png 1470w, https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth-300x313.png 300w, https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth-600x627.png 600w, https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth.png 2036w",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper-1960x2048.png 1960w, https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper-287x300.png 287w, https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper-980x1024.png 980w, https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper-768x802.png 768w, https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper-1470x1536.png 1470w, https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper-300x313.png 300w, https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper-600x627.png 600w, https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper.png 2036w",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing-1960x2048.png 1960w, https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing-287x300.png 287w, https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing-980x1024.png 980w, https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing-768x802.png 768w, https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing-1470x1536.png 1470w, https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing-300x313.png 300w, https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing-600x627.png 600w, https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing.png 2036w",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-1960x2048.png 1960w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-287x300.png 287w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-980x1024.png 980w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-768x802.png 768w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-1470x1536.png 1470w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-300x313.png 300w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine-600x627.png 600w, https://earthlyvibes.co/wp-content/uploads/2022/01/Shine.png 2036w"];
		
		var faceimagesrc	=	["https://earthlyvibes.co/wp-content/uploads/2022/01/Shine.png",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Acne.png",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Even-Tone-and-Smooth.png",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Hyper.png",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Ageing.png",
		"https://earthlyvibes.co/wp-content/uploads/2022/01/Shine.png"]
		
		myInterval = setInterval(function(){
			$('.smileimages img:eq('+i+')').addClass('spinimagecircle')
			$("#faceimage img").attr("srcset",faceimagelibraries[i]);
			$("#faceimage img").attr("src",faceimagesrc[i]);
			if(i == 6) {
				i = 0;
				$(".smileimages img").removeClass("spinimagecircle")
			}else{
				$(".smileimages img:eq("+parseInt(parseInt(i)-1)+")").removeClass("spinimagecircle")
				i++;
			}			
		}, 5000);
		
		$('.smileimages img').mouseenter(
			function () {
				var positionimg	=	$(this).index('.smileimages img');
				$(this).addClass("spinimagecircle");
				$("#faceimage img").attr("srcset",faceimagelibraries[positionimg]);
				$("#faceimage img").attr("src",faceimagesrc[positionimg]);
			});

		$('.smileimages img').mouseleave(function () {
				$(this).removeClass("spinimagecircle");
				$("#faceimage img").attr("srcset",faceimagelibraries[parseInt(parseInt(i)-1)]);
				$("#faceimage img").attr("src",faceimagesrc[parseInt(parseInt(i)-1)]);
			}).mouseleave();
		
		$(".custompricetable th:nth-child(2)").addClass('shadow');
		$(".custompricetable td:nth-child(2)").addClass('shadow');
		
		
		$("#ingredients1").css('background-color', '#13473C');
		
		var ingredientstitles 	=	["Why MAP as Vitamin C?","Why Kakadu Plum Extract?","Why Vitamin E?","Why Licorice Extract?","Why Ferulic Acid?","Why Hyaluronic Acid?","Why Niacinamide?"];
		var ingredientsbodys 	=	["Magnesium Ascorbyl Phosphate is one of the most stable forms of Vitamin C. It is a great antioxidant, helps in skin brightening, boosts skin's collagen production, fades hyperpigmentation and dark spots. Wait, when used under sunscreen, it doubles the UV production.",
				"The Super skincare ingredient is remarkably high in antioxidants and anti-inflammatory properties which works for all your skin concerns. Be it acne, hyperpigmentation, aging signs, skin brightening, immunity booster, collagen booster and whatnot.",
				"Vitamin E is an excellent moisturizer for your skin. It is a powerful antioxidant that minimises acne scars and hyperpigmentation, prevents aging signs like wrinkles and fine lines, and is effective at reducing UV damage in skin. It helps in repairing skin collagen and reduces the puffiness of the skin.",	
				"Glycyrrhizin in licorice root contains anti-inflammatory properties that help in soothing irritated skin. It protects from UVB rays and reverses sun damaged skin. Its antioxidant properties works to brighten dull and tired skin.",
				"Ferulic acid is an antioxidant that works to enhance the stability by boosting the effectiveness of other antioxidants such as Vitamin C and E. It also doubles the photoprotection property of Vitamin C(MAP), enhancing the overall skin health.",
				"Hyaluronic acid is a skin identical ingredient which helps in hydrating and plumping your skin. It helps in reducing acne and skin irritation. It boosts collagen production and makes the skin look more radiant and youthful.",
				"Niacinamide is a cell communicating ingredient that helps balance oil production of all skin types and eventually minimizes pore appearance by keeping skin smooth and moisturized. It reduces inflammation and redness, also decreases hyperpigmentation and increases skin lightness."	
			];
		
		$("a[id^='ingredients'").hover(function(){
			var currentElement	=	$(this).attr("id");
			var getnumber	=	currentElement.match(/\d+/);
			if(getnumber.length && getnumber[0] !=	undefined && getnumber[0] !=	""){
				$("#ingredientstitle .elementor-heading-title").text(ingredientstitles[parseInt(getnumber[0]-parseInt(1))]);
				$("#ingredientsbody p").text(ingredientsbodys[parseInt(getnumber[0]-parseInt(1))]);	
			}
			
			$.each($("a[id^='ingredients'"),function(){
				if(currentElement	!=	$(this).attr("id")){
					$(this).css('background-color', '#13473C00');
				}else{
					$(this).css('background-color', '#13473C');
				}
			});	
		});
	  
	  });