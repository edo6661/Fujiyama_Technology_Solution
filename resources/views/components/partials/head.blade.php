<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="google-site-verification" content="arKKq7d_5bgmyQcgdMJZ_walQE7rRQ5VVwbAonjPZSs" />

<title>{{ $title }} </title>

@php
    $pageDescription =
        $description ??
        'PT Fujiyama Technology Solutions (FTS) is your trusted partner for digital transformation. We provide innovative IT solutions, including software, website, and mobile application development.';
@endphp

<meta name="description" content="{{ $pageDescription }}" />

<meta name="author" content="PT. Fujiyama Technology Solutions" />
<meta name="robots" content="index, follow" />
<meta name="theme-color" content="#ffffff" />
<meta name="msapplication-TileColor" content="#ffffff" />

<link rel="canonical" href="{{ url()->current() }}" />
<link rel="sitemap" type="application/xml" title="Sitemap" href="{{ url('sitemap.xml') }}" />

<link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon/favicon-16x16.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon/favicon-32x32.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon/apple-touch-icon.png') }}">
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />

<meta property="og:title" content="{{ $title ?? 'Default Page Title' }}" />
<meta property="og:description" content="{{ $pageDescription }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:site_name" content="PT. Fujiyama Technology Solutions" />
<meta property="og:type" content="website" />
<meta property="og:image" content="{{ $og_image ?? asset('images/hero.jpg') }}" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $title ?? 'Default Page Title' }}" />
<meta name="twitter:description" content="{{ $pageDescription }}" />
<meta name="twitter:image" content="{{ $og_image ?? asset('images/hero.jpg') }}" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet">

@vite(['resources/css/app.css', 'resources/js/app.js'])

<script async src="https://www.googletagmanager.com/gtag/js?id=G-3XFM0FJ8YS"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-3XFM0FJ8YS');
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "PT. Fujiyama Technology Solutions",
  "alternateName": "Fujiyama Technology Solutions",
  "url": "https://fts.biz.id/",
  "logo": "{{ asset('images/logo-fts.jpg') }}",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "0895-2933-6179", 
    "contactType": "customer service",
    "areaServed": "ID",
    "availableLanguage": ["Indonesian", "English"]
  },
  "sameAs": [
    "https://www.linkedin.com/company/your-linkedin-id"  
  ]
}
</script>

<script>
    window.va =
        window.va ||
        function() {
            (window.vaq = window.vaq || []).push(arguments);
        };
</script>
