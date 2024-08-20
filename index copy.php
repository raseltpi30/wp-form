<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Success Message Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h2>AJAX Form Example</h2>

<form id="ajax-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br><br>
    <button type="submit">Submit</button>
</form>

<!-- Messages -->
<div id="success-message" style="display:none; color:green;"></div>
<div id="error-message" style="display:none; color:red;"></div>

<script>
    $(document).ready(function() {
        $('#ajax-form').on('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting the traditional way
            
            $.ajax({
                url: 'process_form.php', // URL to the PHP script
                type: 'POST',
                data: $(this).serialize(), // Serialize form data
                success: function(response) {
                    // Parse the JSON response
                    var result = JSON.parse(response);
                    
                    // Check the status and display appropriate message
                    if (result.status === 'success') {
                        $('#success-message').text(result.message).show();
                        $('#error-message').hide(); // Hide error message if shown
                    } else {
                        $('#error-message').text(result.message).show();
                        $('#success-message').hide(); // Hide success message if shown
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    $('#error-message').text('An error occurred: ' + error).show();
                    $('#success-message').hide();
                }
            });
        });
    });
</script>

</body>
</html>
