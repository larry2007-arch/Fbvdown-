/* ============================================================
   FBVDOWN.com.ng - PWA Service Worker & Social Share Engine
   ============================================================ */

// 1. Register Service Worker for PWA / Mobile App Capabilities
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js').catch(err => {
            console.log('SW registration error: ', err);
        });
    });
}

// 2. Add to Home Screen (PWA Prompt) Handling
let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent default browser banner to show custom PWA banner
    e.preventDefault();
    deferredPrompt = e;

    const pwaBanner = document.getElementById('pwaBanner');
    if (pwaBanner) {
        pwaBanner.style.display = 'flex';
    }
});

// Setup click handler for PWA Install Button
document.addEventListener('DOMContentLoaded', () => {
    const pwaInstallBtn = document.getElementById('pwaInstallBtn');
    const pwaBanner = document.getElementById('pwaBanner');

    if (pwaInstallBtn) {
        pwaInstallBtn.addEventListener('click', () => {
            if (deferredPrompt) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted FBVDOWN installation');
                    }
                    deferredPrompt = null;
                    if (pwaBanner) pwaBanner.style.display = 'none';
                });
            }
        });
    }

    // 3. Initialize Social Sharing Links Automatically
    const siteUrl = encodeURIComponent('https://fbvdown.com.ng');
    const shareText = encodeURIComponent('Download Facebook Videos and Reels in 1-Click with FBVDOWN!');

    
    

// 4. Native Device Sharing Function (For Mobile Devices)
function shareNative() {
    if (navigator.share) {
        navigator.share({
            title: 'FBVDOWN - Facebook Video Downloader',
            text: 'Download Facebook Videos and Reels in high quality for free.',
            url: 'https://fbvdown.com.ng'
        }).catch(err => console.log('Error sharing:', err));
    } else {
        // Fallback for browsers that do not support Web Share API
        navigator.clipboard.writeText('https://fbvdown.com.ng').then(() => {
            alert('Website link copied to clipboard!');
        }).catch(() => {
            alert('Share this link: https://fbvdown.com.ng');
        });
    }
                }
