$.datepicker.regional['ru'] = {
	closeText: 'Закрыть',
	prevText: 'Предыдущий',
	nextText: 'Следующий',
	currentText: 'Сегодня',
	monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
	dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	weekHeader: 'Не',
	dateFormat: 'dd.mm.yy',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['ru']);



jQuery(document).ready(function() {
      $('.header__burger').click(function(event) {
          $('.header__burger,.header__menu').toggleClass('active');
          $('body').toggleClass('lock');
          $('.header').addClass('active');
      });
      $("#myRangeSumm").on("input", function(){
        $("#summ").val(this.value);
      });
      $("#myRangeSummСontribution").on("input", function(){
        $("#summСontribution").val(this.value);
      });
      $(function(){
        $("#date").datepicker({
            minDate: 0
        });
    });



  
  });




