jQuery(document).ready(function() {
	jQuery(".fancybox")
    .fancybox({
        padding : 20,
		helpers : { 
    	title : { type : 'inside' }
  	}, // helpers
   afterLoad : function() {
    this.title = (this.title ? '' + this.title + '<br />' : '') + 'Image ' + (this.index + 1) + ' of ' + this.group.length;
   } // afterLoad
		
    });
});