// serviceWorker
if (window.Notification && window.Notification !== "denied") {
  Notification.requestPermission((perm) => {
    if (perm === "granted") {
      const notif = new Notification("Notif de main => ok");
    } else {
      const notif = new Notification("Notif pas ok");
    }
  });
}

if (navigator.serviceWorker) {
  // installation d'un service worker
  // INSTALLING (cycle de vie)
  navigator.serviceWorker.register("service-worker.js"); // si le navigateur a un service worker, on installe le service worker
}
