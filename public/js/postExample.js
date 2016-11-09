/**
 * Created by xzjs on 2016/11/9.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function postExample() {
    $.post('../matches', {"car_id":$('#car_id').val()}, function (data) {
        alert(data);
    },"json");
}