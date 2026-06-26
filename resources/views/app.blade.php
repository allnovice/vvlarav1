<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
<script>
  window.addEventListener('error', function(e) {
    var errorDiv = document.getElementById('mobile-debug-log');
    if (!errorDiv) {
      errorDiv = document.createElement('div');
      errorDiv.id = 'mobile-debug-log';
      errorDiv.style = 'position:fixed;top:0;left:0;width:100%;z-index:99999;background:#fee2e2;color:#991b1b;padding:15px;font-family:monospace;font-size:12px;border-bottom:2px solid #ef4444;white-space:pre-wrap;';
      document.body.appendChild(errorDiv);
    }
    errorDiv.innerText += '\n❌ ' + e.message + ' (at ' + e.filename + ':' + e.lineno + ')';
  });
</script>

        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
