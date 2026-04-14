<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentazione pcto</title>
    <link rel="stylesheet" href="include/style.css">
    <link rel="stylesheet" href="include/libro/estilos.css">
    <link rel="stylesheet" href="include/slider/slider.css">
    <link rel="stylesheet" href="include/card-guardioes/estilo.css">

</head>
<body>

    <header>
        <h1>Presentazione PCTO</h1>
        <h3>Valle Nico</h3>
    </header>

    <div style="display:flex; justify-content:center; width:100vw;">
        <?php
            include("include/libro/libro.html");
        ?>
    </div>

    <section>

        <article>
            <h2>Robotica</h2>
            <ul>
                <li>Corso completo e approfondito</li>
                <li>Informatica e meccanica</li>
                <li>Collaborazione tra studenti e nuovi docenti</li>
            </ul>

            
            <?php include("include/card-guardioes/cards.html"); ?>

            
        </article>

        <article>
            <h2>Web Dinamico</h2>
            <p>Laboratorio estivo di introduzione.</p>
            <img src="include/img/siti-web-statici-vs-dinamici.png" alt="IMG">
            <a href="https://www.asddeltaclubvicenza.it" target="blank">Progetto </a>

  
        </article>

        <article>
            <h2>Blender</h2>
            <p>Corso di grafica 3d</p>
            
             <?php include("include/card-guardioesBelnder/cards.html"); ?>

             <?php include("include/3dView/viewer.html"); ?>
  
        </article>

        <article>
            <h2>Android</h2>
            <p>Corso di programmzione Android in Kotlin</p>
            
             <?php include("include/sliderBlob/index.html"); ?>



        </article>

        <article>
            <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Stage Estivo: Pasubio Tecnologia</h2>
             <img src="include/img/logocompatto.png" alt="LOGO" style="height: 100px; margin: 0 0 0 10px;">
             </div>

             <p>La Pasubio Tecnologia è una socetà pubblica che si occupa del supporto alle pubbliche amministrazioni nel settore informatico, dell'infrastruttura di rete e della gestione dei dati.</p>

            <ul>
                <li>Ufficio SOC & Cybersecurity</li>
                <li>Gestione di rete reale</li>
                <li>Database e Scripting</li>
                <li>Stesura manuale Zabbix</li>
                <li>Lavoro con i colleghi</li>
            </ul>
            <div>
            
             <?php include("include/slider/slider.html"); ?>

             </div>

        </article>

        <article>
            <h2>Il computer quantistico</h2>
            <p>Conferenze di fisca e sul tema dei computer quantistici</p>

            <img src="include/img/ilComputerImpossibile.jpg" alt="Libro 'Il computer impossibile'">

        </article>

    </section>

    
    
    <footer>
        <div class="footer-brand">
            <span class="brand-name">Valle Nico</span>
            <span class="brand-sub">Presentazione PCTO &nbsp;·&nbsp; Percorso per le Competenze Trasversali e l'Orientamento</span>
        </div>
        <div class="footer-meta">
            <span class="footer-year">2025 — 2026</span>
            <span class="footer-copy">Tutti i diritti riservati</span>
        </div>
    </footer>

    <script src="include/slider/slider.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="include/card-guardioes/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="include/3d-viewer/viewer.js"></script>
</body>
</html>