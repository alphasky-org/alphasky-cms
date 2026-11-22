<style>
    :root {
        --color-1st: {{ theme_option('primary_color', '#AF0F26') }};
        --primary-color: {{ theme_option('primary_color', '#AF0F26') }};
        --secondary-color: {{ preg_match('/^#[a-f0-9]{6}$/iD', (string) theme_option('secondary_color')) ? theme_option('secondary_color') : '#39465A' }};
        --primary-color-hover: {{ theme_option('primary_color_hover', '#8d081b') }};
    }
    .footer-widgets {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(100%, 13rem), 1fr));
        gap: 2rem;
        align-items: start;
    }
    .footer-widgets > * {
        width: auto;
        max-width: none;
        min-width: 0;
        padding-inline: 0;
        overflow-wrap: anywhere;
    }
    .page-footer.bg-dark { background-color: #212121; color: #f1f1f1; }
    .page-footer .footer-widgets :is(p, li, .widget__title),
    .page-footer .page-copyright p { color: #f1f1f1; }
    .page-footer .footer-widgets a:any-link {
        color: #f1f1f1;
        font-family: var(--primary-font, inherit);
        text-decoration: underline;
        text-underline-offset: .2em;
    }
    .page-footer .footer-widgets a:is(:hover, :focus-visible) { color: #fff; }
    .page-footer .footer-widgets a:focus-visible { outline: 2px solid currentColor; outline-offset: 3px; }
    .footer-widgets img { max-width: 100%; height: auto; }
    @media (max-width: 575px) {
        .footer-widgets {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.5rem 1rem;
        }
    }
    @media (max-width: 359px) {
        .footer-widgets { grid-template-columns: 1fr; }
    }
</style>

@if(theme_option('appearance_preset') === 'glass')
<link rel="stylesheet" href="{{ asset('themes/alphatheme/css/glass.css') }}">
<script defer src="{{ asset('themes/alphatheme/js/glass.js') }}"></script>
@endif
