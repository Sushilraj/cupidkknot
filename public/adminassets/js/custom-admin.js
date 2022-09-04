$(document).ready(function() {
	$('#age').keyup(function() {
        var age = $('#age').val();
        $.ajax({
            type: 'post',
            url: '/admin/user-filter-by-age',
            data: { age: age },
            success: function(resp) {
                $('#appendFilterUser').html(resp);
            },
            error: function() {
                alert('Error');
            }
        });
    });
    $('#income').keyup(function() {
        var income = $('#income').val();
        $.ajax({
            type: 'post',
            url: '/admin/user-filter-by-income',
            data: { income: income },
            success: function(resp) {
                $('#appendFilterUser').html(resp);
            },
            error: function() {
                alert('Error');
            }
        });
    });
});