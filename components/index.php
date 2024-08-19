<?php

function service(string $img, string $title, string $desc)
{
?>
    <div class="col">
        <div class="img">
            <img src="<?php echo $img ?>" alt="service-img" />
        </div>
        <div class="info">
            <p><?php echo $title ?></p>
            <p><?php echo $desc ?></p>

        </div>
    </div>

<?php
}

function news_info(string $btn, string $date, string $desc)
{
?>
    <div class="row inner ">
        <div class="col">
            <span><?php echo $btn ?></span>
        </div>
        <div class="col date">
            <?php echo $date ?>
        </div>
        <div class="col-8">
            <?php echo $desc ?>
        </div>
    </div>

<?php
}
