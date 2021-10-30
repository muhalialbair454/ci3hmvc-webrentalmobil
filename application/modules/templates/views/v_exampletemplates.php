<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>
    <!-- Header -->
    <h1>This is Header</h1>
    <!-- Main Content -->
    <?php $this->load->view($mainContent); ?>
    <!-- Sidebar -->
    <h1>This is Sidebar</h1>
    <!-- Footer -->
    <h1>This is Footer</h1>
</body>

</html>