<li <?php if ($_SERVER['REQUEST_URI'] == '/admin/videotranscode/') echo 'class="active"'; ?>><a
        href="<?= \Idno\Core\Idno::site()->config()->getDisplayURL() ?>admin/videotranscode/">Video Transcoding</a></li>