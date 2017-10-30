$( document ).ready(function() {
	
	$.fn.datepicker.dates['it'] = {
    days: ["Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato", "Domenica"],
    daysShort: ["Lun", "Mar", "Mer", "Gio", "Ven", "Sab", "Dom"],
    daysMin: ["Lu", "Ma", "Me", "Gi", "Ve", "Sa", "Do"],
    months: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
    monthsShort: ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic"],
    today: "Oggi",
    clear: "Svuota",
    format: "dd/mm/yyyy",
    titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
    weekStart: 0
};
	
	$('#data').datepicker({
	
		autoclose: true,
		todayHighlight: true,
		language: 'it',
	
	});

});