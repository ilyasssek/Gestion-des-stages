<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Form Example</title>
    <!-- Include Bootstrap CSS if necessary -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form id="loginForm">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
        </div>
        <button type="button" class="btn btn-primary" id="submitButton">Submit</button>
    </form>

    <script>
        document.getElementById("submitButton").addEventListener("click", function () {
            const email = document.getElementById("exampleInputEmail1").value.trim();
            const password = document.getElementById("exampleInputPassword1").value.trim();

            if (!email || !password) {
                alert("All fields are required!");
                return;
            }

            fetch('/api/loginn', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({
                        email: document.getElementById('exampleInputEmail1').value,
                        password: document.getElementById('exampleInputPassword1').value,
                    }),
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Login successful');
                            window.location.href = '/espaceetudiant';
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));

        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\X1\projet php\resources\views/loginn.blade.php ENDPATH**/ ?>