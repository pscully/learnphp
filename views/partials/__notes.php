<ul class="notes__list">
        <?php foreach ($notes as $note): ?>

            <li class="note">
                <?php if ($note->completed): ?>
                    <strike><?php echo $note->note; ?></strike>

                <?php else: ?>

                    <span><?php echo $note->note; ?></span>

                <?php endif;?>
                <input type="checkbox"></input>
            </li>

        <?php endforeach;?>
</ul>