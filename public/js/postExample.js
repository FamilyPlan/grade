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

function putExample() {
    var match_id=$("#match_id").val();
    $.ajax({
        url:'../matches/'+match_id,
        type:"PUT",
        data:{flag:0},
        success:function (data) {
            alert(data);
        },
        dataType:'json'
    });
}