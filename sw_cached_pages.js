const cacheName = 'v1';

const cacheAssets = [
  './index.php',
  './fundo.jpg',
  './icon-192-192.png',
  './icon-512-512.png',
  './manifest.json',
  './package-lock.json',
  './sw_cached_pages.js',
  './webpack.config.js',  
  './master.css',
  './js/main.js'
  './js/bootstrap.min.js'
  './js/jquery.magnific-popup.js'
  './js/jquery.jquery.min.js'
  './js/owl.carousel.min.js'
  './js/main.js'

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
