<?php
function header_nav()
{
?>

    <header>
        <div class="row">
            <div class="col">
                <a href="index.php">
                    <p>Dummy</p>
                </a>
            </div>
            <div class="col nav">
                <nav>
                    <ul>
                        <li>
                            <a href="index.php#service">Service</a>
                        </li>
                        <li>
                            <a href="index.php#about-us">About Us</a>
                        </li>
                        <li>
                            <a href="index.php#news">News</a>
                        </li>
                        <li>
                            <a href="index.php#contact">Contact</a>
                        </li>
                        <li>
                            <a href="sign_in.php" class="btn-sign">Sign in</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col nav-mob">
                <button style="font-size:24px;color:var(--grey-700);font-weight:bold" class="burger-icon" id="navi"></button>

                <nav class="drop-down">
                    <ul>
                        <li>
                            <a href="index.php#service">Service</a>
                        </li>
                        <li>
                            <a href="index.php#about-us">About Us</a>
                        </li>
                        <li>
                            <a href="index.php#news">News</a>
                        </li>
                        <li>
                            <a href="index.php#contact">Contact</a>
                        </li>
                        <li>
                            <a href="sign_in.php" class="btn-sign">Sign in</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<?php
}
?>