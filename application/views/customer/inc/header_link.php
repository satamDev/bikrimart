<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/customer/') ?>css/bootstrap.min.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= base_url('assets/customer/') ?>css/custom_style.css">

    <link rel="stylesheet" href="<?= base_url('assets/customer/') ?>css/product_list.css">

    <!-- Toast -->
    <script src="<?= base_url() ?>assets/js/toastify.js" type="text/javascript"></script>
    <link href="<?= base_url() ?>assets/css/toastify.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <style>
        .title {
            text-transform: capitalize;
        }
        .uppercase{
            text-transform: uppercase;
        }
    </style>
    <title><?= $meta_title ?></title>
</head>

<script>
    function toast(str, position) {
        Toastify({
            text: str,
            duration: 3000,
            destination: '',
            newWindow: true,
            close: true,
            gravity: 'top',
            position: position,
            stopOnFocus: true,
            style: {
                background: "rgb(15, 52, 67)",
            },
            onClick: function() {}

        }).showToast();

    }
</script>