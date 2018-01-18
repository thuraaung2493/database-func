<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Update Student's Info</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="http://db.dev/?page=update" method="post">
                    <div class="form-group">
                        <label for="id">Student's ID</label>
                        <input class="form-control" id="id" readonly name="id" value="<?php echo $id; ?>" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <label for="name">Student's Name</label>
                        <input class="form-control" id="name" name="name" placeholder="Name" autofocus="autofocus" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" id="address" name="address" value="<?php echo $address; ?>" placeholder="$address">
                    </div>
                    <button type="submit" class="btn btn-primary mr-3">Update</button>
                    <a href="http://db.dev/" type="button" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>