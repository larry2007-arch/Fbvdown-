const CACHE_NAME = 'fbvdown-cache-v1';
const urlsToCache = [
  '/',
  '/index.html',
  '/use.html',
  '/chrome.html',
  '/contact.html',
  '/terms.html',
  '/lo.png'
];

// Install Service Worker
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      return cache.addAll(urlsToCache);
    })
  );
});

// Fetch Cache
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    })
  );
});
