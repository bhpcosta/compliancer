const cacheName = 'v1';

const cacheAssets = [
  './index.php',
  './master.css',
  './css/bootstrap.min.css',
  './css/font-awesome.min.css',
  './css/magnific-popup.css',
  './css/owl.carousel.css',
  './css/owl.theme.default.css',
  './css/style.css',
  './fonts/FontAwesome.otf',
  './fonts/fontawesome-webfont.eot',
  './fonts/fontawesome-webfont.svg',
  './fonts/fontawesome-webfont.ttf',
  './fonts/fontawesome-webfont.woff',
  './fonts/fontawesome-webfont.woff2',
  '/js/main.js'
];

// Call Install Event
self.addEventListener('install', e => {
  console.log('Service Worker: Instalado com sucesso!');

  e.waitUntil(
    caches
      .open(cacheName)
      .then(cache => {
        console.log('Service Worker: Armazenando Arquivos em Cache');
        cache.addAll(cacheAssets);
      })
      .then(() => self.skipWaiting())
  );
});

// Call Activate Event
self.addEventListener('activate', e => {
  console.log('Service Worker: Ativado');
  // Remove unwanted caches
  e.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cache => {
          if (cache !== cacheName) {
            console.log('Service Worker: Limpando o cache antigo');
            return caches.delete(cache);
          }
        })
      );
    })
  );
});

// Call Fetch Event
self.addEventListener('fetch', e => {
  console.log('Service Worker: Fetching');
  e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));
});
