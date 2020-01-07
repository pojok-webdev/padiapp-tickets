$.fn.stairUp = function(options){
    var settings = $.extend({
            level:1
    },options);
    out=$(this);
    for(i=0;i<settings.level;i++){
        out=out.parent();
    }
    return out;
}
$.fn.populateComboBox = function(options){
    var settings = $.extend({
        option:[]
    },options)
        $(this).html('');
        that = $(this);
        $.each(settings.option,function(x,y){
            that.append('<option value='+y.id+'>'+y.name+'</option');
        });
        return that;
}