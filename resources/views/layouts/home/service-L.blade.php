<!DOCTYPE html>
<html lang="en">

@include("home.pageParts.header")
<body>
@yield('name')

@include("home.pageParts.topbar")
@include("home.pageParts.navbar")

@include("home.pageParts.pageHeader")
@include("home.pageParts.service")
@include("home.pageParts.testimonial")

@include("home.pageParts.footer")



</body>
</html>
