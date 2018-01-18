<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Students</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link " href="http://db.dev/">All Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="http://db.dev/?page=addstudents">Add Students</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Students</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="http://db.dev/?page=add" method="post">
                    <div class="form-group">
                        <label for="name">Student's Name</label>
                        <input class="form-control" id="name" name="name" placeholder="Name" autofocus="autofocus">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" id="address" name="address" placeholder="Address">
                    </div>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>