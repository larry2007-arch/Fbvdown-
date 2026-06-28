<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fbvdown - Free Facebook Video & Reels Downloader</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        fbBlue: {
                            50: '#ecf3ff',
                            100: '#dbebff',
                            500: '#1877f2',
                            600: '#166fe5',
                            700: '#0e5aae',
                        },
                        darkBg: '#0b0f19',
                        panelBg: '#131c2e',
                        borderClr: '#1e293b'
                    }
                }
            }
        }
    </script>
    <style>
        /* Modern scrollbar customizations for the FAQ engine */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #131c2e;
            border-radius: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #3b82f6;
        }
        /* Grid background effect */
        .grid-overlay {
            background-image: radial-gradient(rgba(24, 119, 242, 0.15) 1px, transparent 0);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-darkBg text-gray-100 font-sans min-h-screen flex flex-col relative overflow-x-hidden antialiased">
    <div class="absolute inset-0 grid-overlay opacity-40 pointer-events-none z-0"></div>

    <header class="border-b border-borderClr bg-panelBg/80 backdrop-blur-md sticky top-0 z-40">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="#" class="flex items-center space-x-2 group">
                <div class="w-10 h-10 bg-fbBlue-500 rounded-xl flex items-center justify-center text-white shadow-lg shadow-fbBlue-500/20 group-hover:scale-105 transition-transform duration-200">
                    <i class="fa-brands fa-facebook-f text-xl"></i>
                </div>
                <div>
                    <span class="text-xl font-extrabold tracking-tight text-white">fbv<span class="text-fbBlue-500">down</span></span>
                    <span class="block text-[9px] text-gray-400 font-semibold tracking-widest uppercase">Premium Downloader</span>
                </div>
            </a>
            <div class="flex items-center space-x-4">
                <span class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                    <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full mr-1.5 animate-pulse"></span>
                    API Active
                </span>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-6 flex-grow w-full z-10 flex flex-col gap-6">
        
        <div class="w-full bg-panelBg border border-borderClr rounded-2xl p-4 flex flex-col items-center justify-center text-center relative overflow-hidden group min-h-[90px] md:min-h-[120px] shadow-xl">
            <div class="absolute top-2 left-2 text-[9px] uppercase tracking-wider text-gray-500 font-bold bg-darkBg px-2 py-0.5 rounded border border-borderClr">Advertisement</div>
            
            <div class="flex flex-col items-center justify-center">
                <i class="fa-solid fa-rectangle-ad text-gray-500 text-3xl mb-1 animate-pulse"></i>
                <p class="text-xs text-gray-400 font-medium">Google AdSense Space</p>
                <p class="text-[10px] text-gray-600 mt-0.5">Place your responsive horizontal ad tag inside this element block</p>
            </div>
            
            </div>

        <section class="w-full bg-panelBg border border-borderClr rounded-3xl p-6 md:p-10 shadow-2xl relative">
            <div class="absolute top-0 right-0 w-64 h-64 bg-fbBlue-500/5 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight text-white mb-3">
                    Download Facebook <span class="text-transparent bg-clip-text bg-gradient-to-r from-fbBlue-500 to-sky-400">Videos & Reels</span>
                </h1>
                <p class="text-sm md:text-base text-gray-400 mb-8 max-w-xl mx-auto">
                    The fastest free web utility tool to capture high-definition Facebook reels, stories, and public media direct to your computer or mobile.
                </p>

                <form id="extractionForm" class="relative flex flex-col md:flex-row gap-3 items-stretch max-w-2xl mx-auto mb-6">
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-gray-400">
                            <i class="fa-solid fa-link text-lg"></i>
                        </div>
                        <input 
                            type="url" 
                            id="videoUrl" 
                            required
                            placeholder="Paste your Facebook video or reel link here..."
                            class="w-full bg-darkBg text-white placeholder-gray-500 text-sm rounded-2xl pl-12 pr-12 py-4 border border-borderClr focus:outline-none focus:border-fbBlue-500 focus:ring-2 focus:ring-fbBlue-500/20 transition-all duration-200"
                        />
                        <button 
                            type="button" 
                            id="pasteButton"
                            title="Paste from clipboard"
                            class="absolute inset-y-0 right-3 flex items-center px-2 text-gray-400 hover:text-white transition-colors duration-150"
                        >
                            <i class="fa-regular fa-clipboard text-lg"></i>
                        </button>
                    </div>
                    <button 
                        type="submit"
                        id="submitBtn"
                        class="bg-fbBlue-500 hover:bg-fbBlue-600 active:scale-95 text-white font-bold px-8 py-4 rounded-2xl transition-all duration-200 shadow-lg shadow-fbBlue-500/20 flex items-center justify-center space-x-2 min-w-[140px]"
                    >
                        <span>Extract</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>

                <div class="flex items-center justify-center space-x-6 text-xs text-gray-400">
                    <span><i class="fa-solid fa-shield-halved text-fbBlue-500 mr-1"></i> Secure Connection</span>
                    <span><i class="fa-solid fa-bolt text-amber-400 mr-1"></i> Instant Stream Directs</span>
                    <span><i class="fa-solid fa-circle-notch text-sky-400 mr-1"></i> No Signup Required</span>
                </div>
            </div>

            <div id="loaderState" class="hidden mt-10 max-w-xl mx-auto bg-darkBg/60 border border-borderClr rounded-2xl p-6">
                <div class="flex flex-col items-center justify-center space-y-4">
                    <div class="relative w-16 h-16">
                        <div class="absolute inset-0 border-4 border-fbBlue-500/20 rounded-full"></div>
                        <div class="absolute inset-0 border-4 border-t-fbBlue-500 rounded-full animate-spin"></div>
                    </div>
                    <div class="text-center">
                        <p class="text-white font-semibold text-base">Contacting Facebook Servers...</p>
                        <p class="text-xs text-gray-400 mt-1">Extracting streaming endpoints and video metadata</p>
                    </div>
                </div>
            </div>

            <div id="statusAlert" class="hidden mt-6 max-w-xl mx-auto p-4 rounded-2xl border flex items-start space-x-3 text-sm">
                <i id="alertIcon" class="fa-solid mt-0.5"></i>
                <div class="flex-grow">
                    <p id="alertTitle" class="font-bold text-white"></p>
                    <p id="alertMessage" class="text-xs text-gray-400 mt-0.5"></p>
                </div>
                <button type="button" onclick="dismissAlert()" class="text-gray-400 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
            </div>

            <div id="resultsState" class="hidden mt-10 max-w-2xl mx-auto bg-darkBg border border-borderClr rounded-2xl overflow-hidden shadow-xl animate-fadeIn">
                <div class="p-6 flex flex-col md:flex-row gap-6">
                    <div class="relative w-full md:w-48 h-48 md:h-36 bg-panelBg rounded-xl overflow-hidden flex-shrink-0 group border border-borderClr">
                        <img id="resThumbnail" src="" alt="Video Preview" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            <i class="fa-solid fa-circle-play text-white text-3xl"></i>
                        </div>
                        <span id="resDuration" class="absolute bottom-2 right-2 bg-black/80 px-2 py-0.5 text-[10px] font-semibold text-white rounded">
                            0:00
                        </span>
                    </div>

                    <div class="flex-grow flex flex-col justify-between">
                        <div>
                            <span class="inline-block bg-fbBlue-500/10 text-fbBlue-400 border border-fbBlue-500/25 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider rounded-md mb-2">Ready to save</span>
                            <h3 id="resTitle" class="text-white font-bold text-base md:text-lg line-clamp-2 leading-snug">
                                Untitled Facebook Video Content
                            </h3>
                            <p class="text-xs text-gray-500 mt-1 break-all" id="resSourceUrl">Facebook URL</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                            <a id="hdDownloadBtn" href="#" target="_blank" class="flex items-center justify-center space-x-2 bg-gradient-to-r from-fbBlue-500 to-sky-500 hover:from-fbBlue-600 hover:to-sky-600 text-white text-xs font-bold py-3 px-4 rounded-xl transition-all shadow-md shadow-fbBlue-500/10 hover:shadow-fbBlue-500/20">
                                <i class="fa-solid fa-download"></i>
                                <span>Get High Definition (HD)</span>
                            </a>
                            <a id="sdDownloadBtn" href="#" target="_blank" class="flex items-center justify-center space-x-2 bg-panelBg hover:bg-gray-800 text-white text-xs font-bold py-3 px-4 rounded-xl border border-borderClr transition-all">
                                <i class="fa-solid fa-download text-fbBlue-500"></i>
                                <span>Get Standard Quality (SD)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-panelBg border border-borderClr rounded-3xl p-6 shadow-2xl">
            <div class="border-b border-borderClr pb-4 mb-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl md:text-2xl font-extrabold text-white tracking-tight flex items-center">
                        <i class="fa-regular fa-comments text-fbBlue-500 mr-2"></i>
                        Frequently Asked Questions (FAQ)
                    </h2>
                    <p class="text-xs text-gray-400 mt-0.5">Everything you need to know about download techniques, safety guidelines, and operations.</p>
                </div>
                <div class="relative w-full md:w-72">
                    <input 
                        type="text" 
                        id="faqSearch" 
                        placeholder="Search answers..." 
                        class="w-full bg-darkBg border border-borderClr text-xs text-white placeholder-gray-500 rounded-xl pl-8 pr-3 py-2 focus:outline-none focus:border-fbBlue-500"
                    >
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-2.5 text-xs text-gray-500"></i>
                </div>
            </div>

            <div class="max-h-[550px] overflow-y-auto pr-2 custom-scrollbar space-y-4" id="faqScrollContainer">
                
                <div class="faq-card bg-darkBg/50 border border-borderClr rounded-2xl p-4 transition-all duration-150 hover:border-fbBlue-500/30">
                    <h3 class="text-sm font-bold text-white flex items-start">
                        <span class="text-fbBlue-500 mr-2">01.</span>
                        What is fbvdown and how does it operate?
                    </h3>
                    <p class="text-xs text-gray-400 mt-2 pl-6 leading-relaxed">
                        fbvdown is a free premium web tool designed to help you extract and download high-quality videos, reels, stories, and media streams directly from Facebook. It works by secure parsing. It receives the link you submit, identifies structural HTML script elements (such as JSON-LD context graphs and GraphQL structures), obtains raw storage URL strings, and handles connection configurations directly.
                    </p>
                </div>

                <div class="faq-card bg-darkBg/50 border border-borderClr rounded-2xl p-4 transition-all duration-150 hover:border-fbBlue-500/30">
                    <h3 class="text-sm font-bold text-white flex items-start">
                        <span class="text-fbBlue-500 mr-2">02.</span>
                        Do I have to register or create an account to download media files?
                    </h3>
                    <p class="text-xs text-gray-400 mt-2 pl-6 leading-relaxed">
                        Absolutely not. We believe in providing frictionless accessibility. You do not need to register, supply email details, connect other social profiles, or pay any subscription fees. The service is entirely free, funded by minimal privacy-friendly web advertisements.
                    </p>
                </div>

                <div class="faq-card bg-darkBg/50 border border-borderClr rounded-2xl p-4 transition-all duration-150 hover:border-fbBlue-500/30">
                    <h3 class="text-sm font-bold text-white flex items-start">
                        <span class="text-fbBlue-500 mr-2">03.</span>
                        How can I download Facebook Reels to my mobile smartphone device?
                    </h3>
                    <p class="text-xs text-gray-400 mt-2 pl-6 leading-relaxed">
                        Downloading on mobile is simple. Open your official Facebook application, find the desired reel, tap the 'Share' action icon, and choose 'Copy Link'. Navigate your mobile web browser (Chrome, Safari, or Opera) to our site, paste the copied address, tap the extract action, and tap the direct save option to begin downloading instantly.
                    </p>
                </div>

                <div class="faq-card bg-darkBg/50 border border-borderClr rounded-2xl p-4 transition-all duration-150 hover:border-fbBlue-500/30">
                    <h3 class="text-sm font-bold text-white flex items-start">
                        <span class="text-fbBlue-500 mr-2">04.</span>
                        Can fbvdown download private or personal video content?
                    </h3>
                    <p class="text-xs text-gray-400 mt-2 pl-6 leading-relaxed">
                        No. Our extractor only parses content classified under Facebook's global public index. If a video is published within restricted closed groups, limited to custom friend lists, or set to private status, our backend engines cannot access the media asset due to security controls.
                    </p>
                </div>

                <div class="faq-card bg-darkBg/50 border border-borderClr rounded-2xl p-4 transition-all duration-150 hover:border-fbBlue-500/30">
                    <h3 class="text-sm font-bold text-white flex items-start">
                        <span class="text-fbBlue-500 mr-2">05.</span>
                        Does this downloader cache or store copies of extracted media?
                    </h3>
                    <p class="text-xs text-gray-400 mt-2 pl-6 leading-relaxed">
                        No. Respecting user data security and integrity is our core priority. fbvdown acts strictly as a direct transient routing bridge. We do not maintain digital logs of user-submitted query URLs, nor do we preserve video files on our database servers. All downloads are directly pulled from Facebook Media CDN servers to your local computer or phone.
                    </p>
                </div>

                <div class="faq-card bg-darkBg/50 border border-borderClr rounded-2xl p-4 transition-all duration-150 hover:border-fbBlue-500/30">
                    <h3 class="text-sm font-bold text-white flex items-start">
                        <span class="text-fbBlue-500 mr-2">06.</span>
                        What standard video formats and resolutions do you offer?
                    </h3>
                    <p class="text-xs text-gray-400 mt-2 pl-6 leading-relaxed">
                        We fetch original streams formatted in standard web-compliant MP4 file types. Depending on the properties of the raw video posted by the publisher, you can fetch both High-Definition (HD) quality variants or Standard-Definition (SD) rendering configurations optimized for mobile bandwidth limits.
                    </p>
                </div>

                <div class="faq-card bg-darkBg/50 border border-borderClr rounded-2xl p-4 transition-all duration-150 hover:border-fbBlue-500/30">
                    <h3 class="text-sm font-bold text-white flex items-start">
                        <span class="text-fbBlue-500 mr-2">07.</span>
                        How do I download Facebook media on my macOS or Windows system?
                    </h3>
                    <p class="text-xs text-gray-400 mt-2 pl-6 leading-relaxed">
                        The method is fully unified: Copy the URL directly from your desktop web address bar, click into our input search console on your browser, paste the address (Ctrl+V or Cmd+V), and run the parser. From there, select your desired resolution to save the file.
                    </p>
                </div>

                <div class="faq-card bg-darkBg/50 border border-borderClr rounded-2xl p-4 transition-all duration-150 hover:border-fbBlue-500/30">
                    <h3 class="text-sm font-bold text-white flex items-start">
                        <span class="text-fbBlue-500 mr-2">08.</span>
                        Is there an upper boundary on the number of downloads per user?
                    </h3>
                    <p class="text-xs text-gray-400 mt-2 pl-6 leading-relaxed">
                        No limits. You are free to run as many extractions and file downloads as you req
