<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Toast -->
  <script src="<?= base_url() ?>assets/js/toastify.js" type="text/javascript"></script>
  <link href="<?= base_url() ?>assets/css/toastify.css" rel="stylesheet" />

  <script type="text/javascript" src="<?= base_url() ?>assets/js/image-uploader.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

  <script src="https://kit.fontawesome.com/d6c4e606fa.js" crossorigin="anonymous"></script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <title>Bikrimart Vendor</title>

</head>

<!-- <div id="google_translate_element" style="display:none"></div> -->

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

  $('.input-images-1').imageUploader();

  window.onload = function() {

    // Better to construct options first and then pass it as a parameter
    var options = {
      title: {
        text: "Column Chart in jQuery CanvasJS"
      },
      data: [{
        // Change type to "doughnut", "line", "splineArea", etc.
        type: "column",
        dataPoints: [{
            label: "apple",
            y: 10
          },
          {
            label: "orange",
            y: 15
          },
          {
            label: "banana",
            y: 25
          },
          {
            label: "mango",
            y: 30
          },
          {
            label: "grape",
            y: 28
          }
        ]
      }]
    };

    $("#chartContainer").CanvasJSChart(options);
  }

  // function googleTranslateElementInit() {
  //   new google.translate.TranslateElement({
  //     pageLanguage: 'bn'
  //   }, 'google_translate_element');
  // }


</script>