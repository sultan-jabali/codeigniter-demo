<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-2">
        <h2>edit User</h2>
        <form action="<?= base_url('user/update') ?>" method="post" class="needs-validation" novalidate>

            <input type="hidden" name="id" value="<?= $user->id ?>">

            <div class="form-group">
                <label for="fname">First Name</label>:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="first_name" required value="<?= $user->first_name ?>">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="last_name" required value="<?= $user->last_name ?>">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="<?= $user->email ?>">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone" required value="<?= $user->phone ?>">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="address" class="form-control" id="address" placeholder="Enter address" name="address" required value="<?= $user->address ?>">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
            <a href="<?= base_url('User') ?>"><button type="button" class="btn btn-success float-right mr-2">Cancel</button></a>
        </form>
    </div>