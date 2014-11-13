/**
 * Created by grainier on 11/13/14.
 */
function fetch(t)
{
    $.get('/index.php/dict/lookup',{t: t},function(data) {
        listofitemdata = '';
        $('br', data).each(function() {
            listofitemdata += $( this ).text() + '<br />';
        });
        $('#mydiv').html(listofitemdata);
        console.log(listofitemdata);
    });
}