    <nav class="nav-closed">
        <div class="nav-item home" aria-label="Home" data-balloon-pos="right" data-balloon-blunt>
            <div class="icon-container">
                <form method="POST" action="tweets.php">
                    <input id="search" name="search" type="hidden" value="twitter" autocomplete="off">
                    <input type="hidden" name="type" value="recent">
                    <button type="submit" style="background-color: #253341;"> <i class="fab fa-twitter"
                            style="font-size: 40px; color:#1A8CD8;"></i></button>

                </form>

            </div>
            <div class="nav-text">
                <p>Home</p>
            </div>
        </div>
        <div class="nav-item" aria-label="Bitcoin" data-balloon-pos="right" data-balloon-blunt>
            <div class="icon-container">
                <form method="POST" action="tweets.php">
                    <input id="search" name="search" type="hidden" value="bitcoin" autocomplete="off">
                    <input type="hidden" name="type" value="recent">
                    <button type="submit" style="background-color: #253341;"> <i class="cf cf-btc "
                            style="color: #F39321; font-size: 30px;"></i></button>
                </form>

            </div>
            <div class="nav-text">
                <p>Bitcoin</p>
            </div>

        </div>
        <div class="nav-item" aria-label="Ethereum" data-balloon-pos="right" data-balloon-blunt>
            <div class="icon-container">
                <form method="POST" action="tweets.php">
                    <input id="search" name="search" type="hidden" value="ethereum" autocomplete="off">
                    <input type="hidden" name="type" value="recent">
                    <button type="submit" style="background-color: #253341;"> <i class="cf cf-eth "
                            style="color: #CDCED2; font-size: 30px;"></i></button>
                </form>

            </div>
            <div class="nav-text">
                <p>Ethereum</p>
            </div>
        </div>
        <div class="nav-item" aria-label="BNB" data-balloon-pos="right" data-balloon-blunt>
            <div class="icon-container">
                <form method="POST" action="tweets.php">
                    <input id="search" name="search" type="hidden" value="bnb" autocomplete="off">
                    <input type="hidden" name="type" value="recent">
                    <button type="submit" style="background-color: #253341;"> <i class="cf cf-bnb "
                            style="color: #F2B740; font-size: 30px;"></i></button>
                </form>

            </div>
            <div class="nav-text">
                <p>BNB</p>
            </div>
        </div>
        <div class="nav-item" aria-label="Cardano" data-balloon-pos="right" data-balloon-blunt>
            <div class="icon-container">
                <form method="POST" action="tweets.php">
                    <input id="search" name="search" type="hidden" value="cardano" autocomplete="off">
                    <input type="hidden" name="type" value="recent">
                    <button type="submit" style="background-color: #253341;"> <i class="cf cf-ada "
                            style="color: #1F6FCD; font-size: 30px;"></i></button>
                </form>

            </div>
            <div class="nav-text">
                <p>Cardano</p>
            </div>
        </div>

    </nav>