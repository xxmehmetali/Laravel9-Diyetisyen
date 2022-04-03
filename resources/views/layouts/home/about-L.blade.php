<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
</head>

<body>
@include("home.pageParts.header")
@include("home.pageParts.topbar")
@include("home.pageParts.navbar")
@include("home.pageParts.pageHeader")
@include("home.pageParts.inPageAboutUs")
@include("home.pageParts.facts")
@include("home.pageParts.team")
@include("home.pageParts.footer")


</body>
</html>
