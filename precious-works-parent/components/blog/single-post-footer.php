<div class="post-footer">
    <h6 class="mb-0">Share this Article</h6>
    <ul class="social-share-list">
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener" aria-label="Share on Facebook">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener" aria-label="Share on Twitter">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                <span class="sr-only">LinkedIn</span>
            </a>
        </li>
        <li>
            <a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&body=<?php echo rawurlencode(get_permalink()); ?>" aria-label="Share via Email">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <span class="sr-only">Email</span>
            </a>
        </li>
        <li>
            <a href="#" onclick="navigator.clipboard.writeText('<?php echo esc_url(get_permalink()); ?>'); alert('Link copied!'); return false;" aria-label="Copy link">
                <i class="fas fa-link" aria-hidden="true"></i>
                <span class="sr-only">Copy Link</span>
            </a>
        </li>
    </ul>
</div>
