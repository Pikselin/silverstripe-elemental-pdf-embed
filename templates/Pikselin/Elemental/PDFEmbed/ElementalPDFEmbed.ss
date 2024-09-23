<section class="container">
    <div class="pdf-embed-block $StyleVariant">
        <% if $Title && $ShowTitle %><h2 class="element__title">$Title</h2><% end_if %>
        <% if $EmbedCode %>
            <div class="pdf-embed-block-item">
                $EmbedCode.Raw
            </div>
        <% end_if %>
    </div>
</section>
