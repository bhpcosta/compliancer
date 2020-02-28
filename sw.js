const cacheName = 'v1';

const resourcesToPrecache = [
  '/',
  '/index.php',
  '/fundo.jpg',
  '/icon-192-192.png',
  '/icon-512-512.png',
  '/manifest.json',
  '/master.css',
  '/webpack.config.js',
  '/css',
  '/images/icons',
  '/img',
  '/js',
  '/fonts',
];

Self.addEventListener('install'(event) => {
  event.waitUtil(
    caches.open(cacheName)
    .then(cache => (cache.addAll(resourcesToPrecache))),
  );
});
