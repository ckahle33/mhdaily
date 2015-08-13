
jQuery(function(){
	if (jQuery(window).width() < 1024) {
		console.log(jQuery(window).width());
		jQuery('#main').insertBefore('.feed');
		jQuery('.subscribe').insertBefore('#main');
	} else {
		jQuery('.feed').insertBefore('#main');
	}
});


// jQuery(function(){

// function tagImage(tag, image) {

// 	jQuery('.recent').each(function(){
		
// 		var thisTag = jQuery(this);
// 		console.log(thisTag.find('.feature-tags a').text());

// 		if (thisTag.find('.feature-tags a').text().indexOf(tag) >= 0 ) {

// 			console.log('success');

// 			// if (thisTag.find('.image-overlay.image').length()) {
// 			// 	console.log('it works');				
// 			// }
// 			var theImage = thisTag.find('.image');
// 			theImage.css({'background': 'url("/wp-content/uploads/'+image+'") no-repeat center',
// 			  '-webkit-background-size': 'cover',
// 			  '-moz-background-size': 'cover',
// 			   '-o-background-size': 'cover', 
// 			   'background-size': 'cover'});
// 		}
		
// 	});
		
// 	}
// 	tagImage('Abuse','Abuse.jpg');
// 	tagImage('Aging','Aging.jpg');
// 	tagImage('Autism','Austim.jpg');
// 	tagImage('Bipolar','Bipolar.jpg');
// 	tagImage('Drugs-Alcohol','Drugs_Alcohol.jpg');
// 	tagImage('Existence','Existence.jpg');
// 	tagImage('Genetics','Grieving.jpg');
// 	tagImage('IDD','IDD.jpg');
// 	tagImage('International','International.jpg');
// 	tagImage('Men','Money.jpg');
// 	tagImage('Neuroscience','Neuroscience.jpg');
// 	tagImage('Parenting','Parenting.jpg');
// 	tagImage('Pharma','Pharma.jpg');
// 	tagImage('Policy','Policy.jpg');
// 	tagImage('Schizophrenia','Schizophrenia.jpg');
// 	tagImage('Sex','Sex.jpg');
// 	tagImage('Women','Women.jpg');


	// 1

// });






