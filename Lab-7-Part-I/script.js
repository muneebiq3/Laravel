$(document).ready(function() {
    // Display data when the page loads
    displayData();

    // Handle form submission
    $("#crudForm").on("submit", function(e) {
        e.preventDefault();
        
        const name = $("#name").val();
        const email = $("#email").val();
        const phone = $("#phone").val();
        const address = $("#address").val();
        const index = $("#index").val();

        let url = 'insert.php';
        if(index) {
            url = 'update.php';
        }
        
        // Send data to PHP script via AJAX
        $.ajax({
            url: url, // Your PHP script to insert data
            type: 'POST',
            data: {
                name: name,
                email: email,
                phone: phone,
                address: address,
                index: index
            },
            success: function(response) {
                // After success, clear the form and fetch updated data
                console.log(response);
                displayData();
                $("#crudForm")[0].reset(); // Reset form after submission
                $("#index").val('');
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });

    // Display users
    function displayData() {
        $.ajax({
            url: 'fetch.php', // Your PHP script to fetch user data
            type: 'GET',
            success: function(response) {
                $("#dataList").html(response); // Insert the returned user data into the page
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    }

    // Handle delete user
    $(document).on("click", ".delete-btn", function() {
        const userId = $(this).data("id");
        
        $.ajax({
            url: 'delete_user.php', // Your PHP script to delete user
            type: 'POST',
            data: { id: userId },
            success: function(response) {
                console.log(response);
                displayData();
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });

    $(document).on("click", ".edit-btn", function() {
        const userId = $(this).data("id");
        
        $.ajax({
            url: 'fetch.php', // Your PHP script to delete user
            type: 'GET',
            data: { id: userId },
            success: function(response) {
                const user = JSON.parse(response);
                if(user && !user.error) {
                    $("#name").val(user.Name);
                    $("#email").val(user.Email);
                    $("#phone").val(user.Phone);
                    $("#address").val(user.Address);
                    $("#index").val(user.ID);
                }
                else {
                    alert(user.error || "User not found!");
                }
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
});