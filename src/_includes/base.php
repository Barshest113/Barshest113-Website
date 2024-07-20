---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>--- if( page_title ) ------ metadata.page_title --- - --- endif ---Barshest113</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/stylesheet.css">
    </head>

    <body>
        <header>
            <div class="container">
                <h1><a href="/"><img src="/assets/images/red-logo-1-300x31.png" alt="Barshest113"></a></h1>
            </div>
        </header>

        <nav class="top-nav">
            <div class="container">
                <a href="/"--- if( current_top_nav_item ) --- class="current"--- endif --->Home</a>
            </div>
        </nav>

        <main>
            <div class="container">
                {{ content }}
            </div>
        </main>

        <footer>
            <div class="container">
                <p>Copyright &copy; Barshest113.</p>
                <p>Powered by <a href="https://www.dah5.me.uk/staticphp" target="_blank">StaticPHP</a>.</p>
            </div>
        </footer>
    </body>
</html>