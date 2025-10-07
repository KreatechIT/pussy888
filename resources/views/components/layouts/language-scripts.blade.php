<script>
document.addEventListener('DOMContentLoaded', () => {
    const SUPPORTED = ['en', 'bm', 'zh'];
    const DEFAULT = 'en';

    // Get or set current language
    let lang = localStorage.getItem('lang');
    if (!SUPPORTED.includes(lang)) {
        lang = DEFAULT;
        localStorage.setItem('lang', lang);
    }

    // Apply to <html>
    document.documentElement.lang = lang;

    // --- Page visibility ---
    document.querySelectorAll('[id^="page-"]').forEach(div => {
        div.style.display = div.id === `page-${lang}` ? 'block' : 'none';
    });

    // --- Update alternate hreflang links ---
    document.querySelectorAll('link[rel="alternate"]').forEach(link => {
        link.toggleAttribute('disabled', link.hreflang !== lang);
    });

    // --- Optional canonical update (if used) ---
    const canonical = document.querySelector('link[rel="canonical"]');
    if (canonical) {
        let base = "{{ route('home') }}";
        canonical.href = lang === 'en' ? base : `{{ route('home', ['lang' => '']) }}${lang}`;
    }

    // --- Active button style + switch handler ---
    document.querySelectorAll('.lang-btn').forEach(btn => {
        const isActive = btn.dataset.lang === lang;
        btn.classList.toggle('text-pink-400', isActive);
        btn.classList.toggle('font-bold', isActive);
        btn.addEventListener('click', () => {
            const newLang = btn.dataset.lang;
            if (SUPPORTED.includes(newLang) && newLang !== lang) {
                localStorage.setItem('lang', newLang);
                location.reload();
            }
        });
    });
});
</script>
