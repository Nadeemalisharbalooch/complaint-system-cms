<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Complaint Display and Reply Page</title>

    <!-- Add Bootstrap CSS (adjust paths as needed) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS styles here (optional) -->
    <link rel="stylesheet" href="custom-styles.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Complaint Details</h5>
                        <p class="card-text">
                            <strong>Name:</strong> John Doe<br>
                            <strong>Email:</strong> john.doe@example.com<br>
                            <strong>Complaint Type:</strong> Academic<br>
                            <strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula erat eu dictum fringilla.
                        </p>
                        <div class="card-footer text-muted">
                            Submitted on: October 25, 2023
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reply to Complaint</h5>
                        <form action="process_reply.php" method="POST">
                            <div class="form-group">
                                <label for="reply">Your Reply</label>
                                <textarea class="form-control" id="reply" name="reply" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Reply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JavaScript (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
