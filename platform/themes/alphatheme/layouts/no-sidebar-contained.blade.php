{!! Theme::partial('header') !!}
<main>
    @if (Theme::get('section-name'))
        {!! Theme::partial('breadcrumbs') !!}
    @endif
    <div class="page-content" data-page-width="contained"
         style="width: min(1080px, calc(100% - clamp(32px, 8vw, 96px))); margin-inline: auto; padding-block: clamp(24px, 4vw, 48px);">
        {!! Theme::content() !!}
    </div>
</main>
{!! Theme::partial('footer') !!}
