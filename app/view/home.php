<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="http://db.dev/">All Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://db.dev/?page=addstudents">Add Students</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Students Table</h1>
                <br>
                <table class="table table-hover table-sm"">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student) { ?>
                        <tr>
                            <td>
                                <?php echo $student['id'] ?>
                            </td>
                            <td>
                                <a href="http://db.dev/?page=selectid&id=<?php echo $student['id']; ?>">
                                    <?php echo $student['name'] ?>
                                </a>
                            </td>
                            <td>
                                <?php echo $student['address'] ?>
                            </td>
                            <td>
                                <a href="http://db.dev/?page=edit&id=<?php echo $student['id']; ?>" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="http://db.dev/?page=delete&id=<?php echo $student['id']; ?>" class="btn btn-danger btn-sm" role="button" aria-pressed="true">
                                    X
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>