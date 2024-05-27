<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
@vite('resources/css/app.css')

<title>Laravel</title>





</head>

<body class="-bg--background-color w-full h-full flex flex-col items-center justify-center">
    <x-Layouts :contacts='$contacts' :sortColumn='$sortColumn' :sortDirection="$sortDirection"/>
    <x-modal/>
    <x-error-modal />
    <x-show-modal/>
    <x-edit-modal/>
    <x-destroy-modal/>
   
</body>

</html>
