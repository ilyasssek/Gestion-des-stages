 
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD</title>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min
.js"></script>
</head>
<body>
<div class="container my-5">
<h2>List of users from database</h2>
<a class="btn btn-primary" href="create.php" role="button">Signup</a>
<br>
<br>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($listOfClients as $client)?>
<tr>
<td><?php $client->id ?></td>
<td><?php $client->firstName?></td>
<td><?php $client->lastName?></td>
<td><?php $client->email ?></td>
td>
            <a class='btn btn-success btn-sm' href='update.php?idUpdated=<?php echo e($client->id); ?>'>edit</a>
            <a class='btn btn-danger btn-sm' href='delete.php?idDeleted=<?php echo e($client->id); ?>'>delete</a>
        </td>
    </tr>
<td>
<a class='btn btn-success btn-sm' href='update.php?idUpdated=$row[id]'
>edit</a>
<a class='btn btn-danger btn-sm' href='delete.php?idDeleted=$row[id]'
>delete</a>
</td>
</tr>

</tbody>
</table>
<?php $listOfClients->links() ?>
</div>
</body>
</html><?php /**PATH C:\Users\X1\projet php\resources\views/client.blade.php ENDPATH**/ ?>