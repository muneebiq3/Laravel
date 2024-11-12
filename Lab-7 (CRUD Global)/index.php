<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="icon" href="favicon.ico?v=1" type="image/x-icon">

</head>
<body>
    <div class="container my-5">
        <h2 class="text-center">PHP & MySQL CRUD Application</h2>

        <!-- Form for adding/updating users -->
        <form id="crudForm" class="my-4">
            <input type="hidden" id="index">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <!-- Container for displaying users -->
        <div class="row row-cols-1 row-cols-md-3 g-4" id="dataList">
            <!-- User data will be inserted here via JavaScript -->
        </div>
    </div>

    <!-- Include JavaScript files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>