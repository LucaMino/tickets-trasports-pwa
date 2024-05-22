<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PWA Example</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content='yes' name='apple-mobile-web-app-capable'/>
        <meta content='yes' name='mobile-web-app-capable'/>
        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- FontAwesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Other CSS -->
        <link rel="stylesheet" href="src/css/styles.css">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/src/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/src/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/src/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/src/images/favicon/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
        <!-- Header -->
        <div class="container rounded-lg text-white bg-red-600 px-3 py-4 flex flex-row">
            <div class="w-1/4 flex items-center">
                <i class="fa-solid fa-chevron-left me-4"></i>
                <i class="fa-light fa-house"></i>
            </div>
            <div class="w-3/4 flex items-center justify-center">
                <span class="text-center font-bold">I miei titoli</span>
            </div>
            <div class="w-1/4 flex items-center justify-end">
                <i class="fa-regular fa-user"></i>
            </div>
        </div>

        <div id="content" class="px-2">
            <!-- My subs page header -->
            <div class="container flex justify-between items-center mt-5 mb-4">
                <span class="text-black	font-bold">Da utilizzare e scaduti</span>
                <button class="outline app-btn">
                    <i class="fa fa-refresh" aria-hidden="true" class="me-2"></i>
                    <span class="font-bold">Aggiorna</span>
                </button>
            </div>
            <!-- Accordion -->
            <div id="accordion-collapse" data-accordion="open">

        </div>

        <?php include 'src/views/partials/footer.php'; ?>
    </body>

    <script>
        if('serviceWorker' in navigator)
        {
            window.addEventListener
            (
                'load',
                () => {
                    navigator
                        .serviceWorker
                        .register('/service-worker.js')
                        .then
                        (
                            (registration) => {},
                            (error) => {}
                        );
                    }
            )
        }
    </script>
</html>