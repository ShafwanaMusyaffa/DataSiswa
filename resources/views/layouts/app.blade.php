<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>@yield('title')</title>

    @include('includes.style')
  </head>

  <body
    style="
      /*background: url(&quot;design.jpg&quot;);*/
      background-position: 0 -60px;
    "
  >

  @include('includes.navbar')

  @yield('content')


    @include('includes.footer')
  
    @include('includes.script')
  </body>
</html>
