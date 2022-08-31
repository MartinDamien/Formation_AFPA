self.addEventListener("install", (evt) => {
  console.log("[Service Worker] Installation");
  evt.waitUntil(
    caches.open("cache01").then((cache) => {
      console.log(
        "[Service Worker] Mise en cache globale: app shell et contenu"
      );
      return cache.addAll(["/", "/index.html", "/main.js"]);
    })
  );
});
self.self.addEventListener("activate", (evt) => {
  console.log("sw: evenement activé");
});

self.addEventListener("fetch", (evt) => {
  console.log("evenement fetch", evt.request.url);
});

/*---------------------------------------------------------------------
        Stratégie cache first and then network
---------------------------------------------------------------------*/

self.respondWith(
  caches.match(evt.request).then((response) => {
    if (response) {
      console.log(`RES: ${response}`);
      return response;
    }
    return fetch(evt.request).then((newResponse) => {
      caches
        .open("caches01")
        .then((cache) => cache.put(evt.request, newResponse));
      return newResponse.clone();
    });
  })
);

/*---------------------------------------------------------------------
        Stratégie network first and then cache
---------------------------------------------------------------------*/
evt.respondWith(
        fetch(evt.request).then( res => { 
            caches.open("cache01").then(cache => cache.put(evt.request,res))
            return res.clone();
        }).catch( err => {
            return caches.match(evt.request); 
        })
)

/*---------------------------------------------------------------------*/
// self.registration.showNotification("Notif depuis le sw.js", {
//   body: "je suis une notification du service worker - question",
//   actions: [
//     { action: "accept", title: "accepter steup" },
//     { action: "refuse", title: "refuser que cest" },
//   ],
// });

// self.addEventListener("notificationclick", (evt) => {
//   if (evt.action === "accept") {
//     console.log("vous avez accepté");
//   } else if (evt.action === "refuse") {
//     console.log("vous avez refusé");
//   } else {
//     console.log(
//       "vous avez cliqué sur la notification (pas sur un des boutons)"
//     );
//   }
//   evt.notification.close();
// });
