jQuery(document).ready(function(){
    var dateToday = new Date(); 
	jQuery('.lym-datepicker').datepicker({
					dateFormat : 'd/m/yy',
					minDate: dateToday
});	
});