self.addEventListener
(
    'install',
    function(event)
    {
        event.waitUntil
        (
            caches.open('my-pwa-cache').then(function(cache) {
                return cache.addAll([
                    '/',
                    '/index.php',
                    'src/css/styles.css',
                    'src/js/main.js',
                    '/src/images/favicon/android-chrome-192x192.png',
                    '/src/images/favicon/android-chrome-384x384.png'
                  ])
            })
        );
    }
);

self.addEventListener
(
    'fetch',
    function(event)
    {
        event.respondWith
        (
            caches.match(event.request).then(function(response) {
                return response || fetch(event.request);
              })
        );
    }
);
