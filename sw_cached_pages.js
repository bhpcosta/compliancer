const cacheName = 'v1';

const cacheAssets = [
  './index.php',
  './fundo.jpg',
  './icon-192-192.png',
  './icon-512-512.png',
  './manifest.json',
  './package-lock.json',
  './sw.js',
  './sw_cached_pages.js',
  './webpack.config.js',  
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
  './images/icons/icon-128x128.png',
  './images/icons/icon-144x144.png',
  './images/icons/icon-152x152.png',
  './images/icons/icon-192x192.png',
  './images/icons/icon-384x384.png',
  './images/icons/icon-512x512.png',
  './images/icons/icon-72x72.png',
  './images/icons/icon-96x96.png',
  './img/Integridade.jpg',
  './img/about1.jpg',
  './img/about2.jpg',
  './img/about3.jpg',
  './img/about4.jpg',
  './img/author.jpg',
  './img/background2.jpg',
  './img/background3.jpg',
  './img/background3_.jpg',
  './img/background3__.jpg',
  './img/confidencialidade.png',
  './img/disponibilidade.jpg',
  './img/icon-192-192.png',
  './img/icon-512-512.png',
  './img/icon_fav.png',
  './img/legalidade.jpg',
  './img/logo-alt.png',
  './img/logo-alt_.png',
  './img/logo.png',
  './img/logo__.png',
  './img/post1.jpg',
  './img/post2.jpg',
  './img/team.jpg',
  './img/team2.jpg',
  './img/team3.jpg',
  './img/work1.JPG',
  './img/work2.JPG',
  './img/work3.JPG',
  './img/work4.JPG',
  './img/work5.JPG',
  './img/work6.JPG',
  './js/main.js'
  './js/bootstrap.min.js'
  './js/jquery.magnific-popup.js'
  './js/jquery.jquery.min.js'
  './js/owl.carousel.min.js'
  './js/sw.js'
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
