

/* ----------------------------------------------------------- */

jQuery(function(){ 

	jQuery('#font').fontselect().change(function(){
  
        // replace + signs with spaces for css
        var font = jQuery(this).val().replace(/\+/g, ' ');

        // split font into family and weight
        font = font.split(':');

        // set family on paragraphs
        jQuery('p, .glm-font-box .glm-font-prev textarea').css('font-family', font[0]);
      
    });

    jQuery('.search-fonts').on('keyup change', function() {
        var value = jQuery(this).val().toLowerCase();
        jQuery(".fs-results li").filter(function() {
            jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1);
        });
    }); 

    // ==============================================================

    jQuery('.glm-font-box .glm-font-styles .glm-font-size input').on('keyup change', function() {
        var classe = jQuery( this ).parent().parent().parent().parent().parent().attr('glm-field-name');
        jQuery( "span[glm-field-name="+ classe +"] textarea" ).css( "font-size",  jQuery(this).val() );
    });

    jQuery('.glm-font-box .glm-font-styles .glm-font-spacing input').on('keyup change', function() {
        var classe = jQuery( this ).parent().parent().parent().parent().parent().attr('glm-field-name');
        jQuery( "span[glm-field-name="+ classe +"] textarea" ).css( "letter-spacing",  jQuery(this).val() );
    });

    jQuery('.glm-font-box .glm-font-styles .glm-font-weight input').on('keyup change', function() {
        var classe = jQuery( this ).parent().parent().parent().parent().parent().attr('glm-field-name');
        jQuery( "span[glm-field-name="+ classe +"] textarea" ).css( "font-weight",  jQuery(this).val() );
    });

    jQuery('.glm-font-box .glm-font-styles .glm-line-height input').on('keyup change', function() {
        var classe = jQuery( this ).parent().parent().parent().parent().parent().attr('glm-field-name');
        jQuery( "span[glm-field-name="+ classe +"] textarea" ).css( "line-height",  jQuery(this).val() );
    });

});

/* ----------------------------------------------------------- */


jQuery(document).ready(function() {
	jQuery('.golem-wrap .section .glm-header-img input').on('change', function() {
		var glm_header_val = jQuery(this).val(); 
		if(glm_header_val == "gh2" || glm_header_val == "gh3"){
			jQuery('.golem-wrap .section .sub-menu ul li a[glm-sub-item="#glm-sub-header-top-bar"]').removeClass('hide').addClass('show');
		}else{
			jQuery('.golem-wrap .section .sub-menu ul li a[glm-sub-item="#glm-sub-header-top-bar"]').removeClass('show').addClass('hide');
		}
	});
	jQuery(document).find('.golem-wrap .section .glm-header-img input:checked').trigger('change');
});
	

/* ----------------------------------------------------------- */

jQuery(function() {
	jQuery('paper-item').on('click', function(e) {
		var glm_dropdown_val = jQuery(this).text().trim(); 
		var glm_dropdown_name = '.' + jQuery(this).closest('paper-listbox').attr('glm-select-field'); 
		
		jQuery(glm_dropdown_name).val(glm_dropdown_val);
	});
});
	
/* ----------------------------------------------------------- */
	
jQuery(function() {
	jQuery('paper-slider').on('change', function(e) {
		var glm_slider_name = '.' + jQuery(this).attr('name'); 
		var glm_slider_val = jQuery('paper-progress', this).attr('aria-valuenow'); 
		
		jQuery(glm_slider_name).val(glm_slider_val);
	});
});
	
/* ----------------------------------------------------------- */
	
jQuery(function() {
	jQuery('input[data-wheelcolorpicker]').on('click', function(e) {
		var glmColorClass = '.' + jQuery(this).attr('name');

		jQuery(glmColorClass).on('colorchange change keyup', function(e) {
			var color = jQuery(this).wheelColorPicker('value');
			jQuery(glmColorClass+'-prev').css('background-color', color);
		});
	});
});


jQuery('input[data-wheelcolorpicker]').on('click', function() {
    jQuery(this).toggleClass("open");
    /*jQuery(any).on('click', function() {
        jQuery('input[data-wheelcolorpicker]').removeClass("open");
    });*/
    
});

/*jQuery( ':not(input[data-wheelcolorpicker])' ).on( "click", function( event ) {
    jQuery('input[data-wheelcolorpicker]').removeClass("open");
});*/

/*jQuery( document ).on( "click", function( event ) {
    jQuery('input[data-wheelcolorpicker]').removeClass("open");
});*/





	
/* ----------------------------------------------------------- */
	
jQuery(document).ready(function(jQuery) {
	jQuery('.upload-btn').click(function(e) {
		e.preventDefault();

		var glm_img_prev_target = '.' + jQuery(this).attr('glm-img-prev-target');
		var glm_img_field_target = '.' + jQuery(this).attr('glm-img-field-target');
		var glm_img_remove_btn = '.remove-btn[glm-img-field-target=' + jQuery(this).attr('glm-img-field-target') + ']';

		var custom_uploader = wp.media({
			title: jQuery(this).attr('glm-img-title'),
			button: {
				text: jQuery(this).attr('glm-img-btn-text')
			},
			multiple: jQuery(this).attr('multiple')
		})

		.on('select', function() {
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			jQuery( glm_img_remove_btn ).show();
			jQuery( glm_img_prev_target ).attr('src', attachment.url).show();
			jQuery( glm_img_field_target ).val(attachment.url);
		})
		.open();
	});

	jQuery('.remove-btn').click(function(e) {

		var glm_img_prev_target = '.' + jQuery(this).attr('glm-img-prev-target');
		var glm_img_field_target = '.' + jQuery(this).attr('glm-img-field-target');

		jQuery( this ).hide();
		jQuery( glm_img_prev_target ).attr('src', '').hide();
		jQuery( glm_img_field_target ).val('');

	});
});
	
/* ----------------------------------------------------------- */

jQuery(".glm-header .btn a.theme-switch input[value='dark']" ).on( "click", function() {
	jQuery(this).removeClass("light");
	jQuery('.golem-wrap, body').removeClass("light");
	
	jQuery(this).addClass("dark");
	jQuery('.golem-wrap, body').addClass("dark");
});
	
jQuery(".glm-header .btn a.theme-switch input[value='light']" ).on( "click", function() {
	jQuery(this).removeClass("dark");
	jQuery('.golem-wrap, body').removeClass("dark");
	
	jQuery(this).addClass("light");
	jQuery('.golem-wrap, body').addClass("light");
});
	
/* ----------------------------------------------------------- */

jQuery(".golem-wrap .glm-menu li a" ).on( "click", function() {
	
	jQuery(".golem-wrap .glm-menu li a, .golem-wrap .section, .golem-wrap .section .sub-menu li a, .golem-wrap .section .sub-tab").removeClass('active');

	var idTab = jQuery(this).attr('glm-item');
	jQuery(this).addClass('active');
	jQuery(idTab).addClass('active');

	jQuery(".golem-wrap .section .sub-menu li:first-child a, .golem-wrap .section .sub-tab.first").addClass('active');
	
});
	
/* ----------------------------------------------------------- */
	
jQuery(".golem-wrap .section .sub-menu li a" ).on( "click", function() {
	
	jQuery(".golem-wrap .section .sub-menu li a, .golem-wrap .section .sub-tab").removeClass('active');

	var idSubTab = jQuery(this).attr('glm-sub-item');
	jQuery(this).addClass('active');
	jQuery(idSubTab).addClass('active');
	
});