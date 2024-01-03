window.addEventListener('load', function(){
	new Glider(document.querySelector('.carousel__lista'), {
		
			slidesToShow: 1,
			dots: '.carousel__indicadores',
			
			arrows: {
				prev: '.carousel__anterior',
				next: '.carousel__siguiente'
		},
		responsive: [
			{
			  // >= 775px
			  breakpoint: 450,
			  settings: {
				
				slidesToShow: 1,
				
			  }
			},{
			  //  >= 1024px
			  breakpoint: 800,
			  settings: {
				slidesToShow: 1,
				
				
			  }
			},{
				//  >= 1024px
				breakpoint: 300,
				settings: {
				  slidesToShow: 1,
				  
				  
				}
			  }
		]
	});
});