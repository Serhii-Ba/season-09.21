function getUsersResult(page)
{
    $.ajax({
        url: 'http://localhost:8080/users.php?page=' + page,
        success: function(response) {
            $('#container').html(response);
        }
    });
}

function getTestsResult()
{
    $.ajax({
        url: 'http://localhost:8080/test.php',
        success: function(response) {
            $('#container').html(response);
        }
    });
}
