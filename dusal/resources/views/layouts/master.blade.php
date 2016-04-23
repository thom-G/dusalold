<!DOCTYPE html>
<html lang="en">
  @include('partails.head')
  <body>
    @include('partails.nav')
    @yield('content')

    @include('partails.footer')

    @include('partails.javascripts')
    @yield('scripts')
    <script>
      $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
      }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
      });
    </script>
  </body>
</html>
