<!DOCTYPE html>
<html lang="en-US" ng-app="controleDespesa">
<head>
    <title>Laravel 5 AngularJS CRUD Example</title>

    <!-- Load Bootstrap CSS -->
    <link href="<?= asset('app/lib/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>

<div ng-controller="despesaController">
{{ teste }}
</div>


<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script src="<?= asset('app/lib/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= asset('app/lib/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('app/app.js') ?>"></script>
<script src="<?= asset('app/controllers/despesa.js') ?>"></script>
</body>
</html>