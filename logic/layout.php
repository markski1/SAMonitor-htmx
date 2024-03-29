<?php

function PageHeader($title, $description = null) {
    if (isset($_SERVER['HTTP_HX_REQUEST'])) return;

    $showDescription = $description ?? "A server monitor for SA-MP servers and open.mp servers. San Andreas Multiplayer public API and Masterlist. GTA Multiplayer server list. SACNR Monitor succesor.";

    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>SAMonitor - <?=$title?></title>
            <link rel="icon" type="image/x-icon" href="../assets/logo256.webp">
            <meta property="og:image" content="https://sam.markski.ar/assets/logo256.webp" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="../style_0.css">
            <link rel="manifest" href="../manifest.json" />
            <meta name="title" content="SAMonitor - <?=$title?>">
            <meta name="description" content="<?=$showDescription?>">
            <meta name="keywords" content="SA-MP, SAMP, open.mp, openmp, omp, SACNR, Monitor, GTA, Multiplayer">

            <meta name="og:title" content="SAMonitor - <?=$title?>">
            <meta property="og:description" content="<?=$showDescription?>">

            <script src="../assets/chart.js"></script>
            <script defer src="../assets/htmx.min.js"></script>
        </head>
        <body>
            <header>
                <div class="headerContents">
                    <div>
                        <h1>SAMonitor</h1>
                    </div>
                    <div>
                        <a href="../" hx-get="../" hx-push-url="true" hx-target="#main" hx-indicator="#main" >servers</a> <span class="separator">&nbsp;/&nbsp;</span>
                        <a href="../about" hx-get="../about" hx-push-url="true" hx-target="#main" hx-indicator="#main">about</a> <span class="separator">&nbsp;/&nbsp;</span>
                        <a href="../masterlist" hx-get="../masterlist" hx-push-url="true" hx-target="#main" hx-indicator="#main">masterlist</a> <span class="separator">&nbsp;/&nbsp;</span>
                        <a href="../statistics" hx-get="../statistics" hx-push-url="true" hx-target="#main" hx-indicator="#main">statistics</a> <span class="separator">&nbsp;/&nbsp;</span>
                        <!--<a href="../partners" hx-get="../partners" hx-push-url="true" hx-target="#main" hx-swap="transition:true">partners</a> <span class="separator">&nbsp;/&nbsp;</span>-->
                        <a href="../add" hx-get="../add" hx-push-url="true" hx-target="#main" hx-indicator="#main">add server</a>
                    </div>
                </div>
            </header>
            <main id="main" class="opacity-trans">
    <?php
}

function PageBottom() {
    if (isset($_SERVER['HTTP_HX_REQUEST'])) return;
    ?>

            </main>
        </body>
    </html>

    
    <script>
        var lastUsedCopyButton;

        function CopyAddress(ipID, buttonID) {
            var copyText = document.getElementById(ipID);
            navigator.clipboard.writeText(copyText.innerText);
            lastUsedCopyButton = document.getElementById(buttonID)
            lastUsedCopyButton.innerHTML = "IP Copied!";
            setTimeout(function () {
                lastUsedCopyButton.innerHTML = "Copy IP";
            }, 3000);
        }
    </script>
    
<?php } ?>