var padi = {
    toDate : function(){
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;
        return(today);
    },
    getDiffer : function(date1,date2){
        var Difference_In_Time = date2.getTime() - date1.getTime(); 
        var Difference_In_Seconds = Difference_In_Time / 1000;
        var Difference_In_Minutes = Math.round(Difference_In_Seconds / 60);
        var Difference_In_Hours = Math.round(Difference_In_Minutes / 60);
        var Difference_In_Days = Math.round(Difference_In_Hours / 24);
        var hours_left = Difference_In_Hours % 24;
        var minutes_left = Math.round(Difference_In_Minutes % 60);
        var seconds_left = Math.round(Difference_In_Seconds % 60);
            return {
                days:Difference_In_Days,
                hours:Difference_In_Hours,
                minutes:Difference_In_Minutes,
                seconds:Difference_In_Seconds,
                hours_left:hours_left,
                minutes_left:minutes_left,
                seconds_left:seconds_left
            };
    }
}
$.fn.showDate = function(options){
    var settings = $.extend({
        startTime:''
    },options);
    $(this).each(function(){
        cdate = $(this).stairUp({level:1}).find('.cdate').html();
        let cdatesplitted = cdate.split(' ');
        let mdYsplitted = cdatesplitted[0].split("-");
        let mdY = mdYsplitted[1]+'/'+mdYsplitted[2]+'/'+mdYsplitted[0]+' '+cdatesplitted[1];
        console.log('mdY',mdY);
        let x = padi.getDiffer(new Date(mdY),new Date());
        let out = x.days+' hari,'+x.hours_left+' jam,'+x.minutes_left+' menit,'+x.seconds_left+' detik';
        $(this).html(out);
    });
}
