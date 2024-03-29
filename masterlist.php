<?php
    include 'logic/layout.php';
    PageHeader("masterlist mod");

    if (!isset($_GET['spanish'])) {
?>

<div>
    <h2>Masterlist mod</h2>
    <p>Integrate SAMonitor's listings right in your SA-MP client. | <a href="masterlist?spanish" hx-get="masterlist?spanish" hx-push-url="true" hx-target="#main"">Leer en Español.</a></p>
    <div class="innerContent">
        <h3>Information</h3>
        <p>SA-MP Masterlist Fix is a mod which replaces the "Internet" tab's server list with a new source, specifically, SAMonitor.</p>
        
        <p>If desired, you can use any other masterlist provider.</p>

        <figure style="margin: .5rem">
            <img style="width: 100%; max-width: 640px" src="assets/client-showcase.png" alt="Screenshot of the SA-MP client with the mod.">
            <figcaption style="font-size: 0.9rem">Look at all those servers!</figcaption>
        </figure>
    </div>

    <div class="innerContent">
        <h3>Installation</h3>
        <h4>1. Get SA-MP</h4>
        <p>
            Of course, the first step is to install SA-MP. The mod works with both 0.3.7 and 0.3DL. <br />
            While it should work with any version of 0.3.7, I strongly suggest you use the latest R5. <a target="_blank" href="https://www.sa-mp.mp/downloads/">Download here</a>.
        </p>
        <h4>2. Get SA-MP Masterlist Fix</h4>
        <p>
            Once SA-MP is installed, proceed to download the latest version of SA-MP Masterlist Mod. <a target="_blank" href="https://github.com/spmn/sa-mp_masterlist_fix/releases/latest">Download here</a>.
        </p>
        <p>
            <b>Be advised:</b> It is possible you get a "malicious software" alert. This is a false positive, <a href="https://github.com/spmn/sa-mp_masterlist_fix/issues/9">and the developer has contacted Microsoft in hopes of having it resolved</a>. If you don't trust us, you may check it yourself with a tool like <a href="https://virustotal.com">VirusTotal</a>, or build it from source.
        </p>
        <h4>3. Install the mod</h4>
        <p>
            The page above explains the installation, but if needed, here's it is:
        </p>
        <ol type="1" style="line-height: 1.7rem">
            <li>Go to the SA-MP Masterlist Fix download site, linked above.</li>
            <li>Scroll down, and download the "version.dll" file.</li>
            <li>Go to your Downloads folder, and copy the "version.dll" file.</li>
            <li>Go to the folder where your GTA:SA is installed, and paste "version.dll".</li>
            <li>Open SA-MP, and check the Internet tab. It should be working.</li>
        </ol>
        <p>And if you really want to make sure, here's a quick video:</p>
        <video style="width: 100%; max-width: 768px" controls>
            <source src="assets/tutorial.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video> 
    </div>

    <div class="innerContent">
        <h3>Attribution</h3>
        <p>I am extremely thankful to spmn, the author of 'SA-MP Masterlist Fix', for taking the time to rewrite his mod.</p>
        <p>We both returned to our projects as soon as we heard about the upcoming shutdown of SA-MP's operations, and I am happy with our work.</p>
    </div>
</div>

<?php
    } else {
?>

<div>
    <h2>Masterlist mod</h2>
    <p>Integra el listado de servidores de SAMonitor en SA-MP. | <a href="masterlist" hx-get="masterlist" hx-push-url="true" hx-target="#main"">Read in English</a>.</p>
    
    <div class="innerContent">
        <h3>Información</h3>
        <p>SA-MP Masterlist Fix es un mod que reemplaza el listado de servidores de Internet en SA-MP con los de esta página.</p>
        
        <p>Si lo deseas, podes configurarlo para que use cualquier otro masterlist.</p>

        <figure style="margin: .5rem">
            <img style="width: 100%; max-width: 640px" src="assets/client-showcase.png" alt="Captura del cliente de SA-MP con el mod instalado.">
            <figcaption style="font-size: 0.9rem">Mirá todos esos servers!</figcaption>
        </figure>
    </div>

    <div class="innerContent">
        <h3>Instalación</h3>
        <h4>1. Obtener SA-MP</h4>
        <p>
            Obviamente, el primer caso es instalar SA-MP, si aún no lo hiciste. El mod funciona tanto con 0.3.7 como con 0.3DL. <br />
            Si bien deberia funcionar con cualquier edición de 0.3.7, recomiendo usar la ultima edición, R5. <a target="_blank" href="https://www.sa-mp.mp/downloads/">Descargar de acá</a>.
        </p>
        <h4>2. Descargar SA-MP Masterlist Fix</h4>
        <p>
           Una vez que tenemos SA-MP instalado, procedemos a descargar el mod. <a target="_blank" href="https://github.com/spmn/sa-mp_masterlist_fix/releases/latest">Descargar de acá</a>.
        </p>
        <p>
            <b>Atención:</b> Es posible que recibas una alerta de "software malicioso". Esto es falso, <a href="https://github.com/spmn/sa-mp_masterlist_fix/issues/9">y se ha contactado a Microsoft para intentar solucionarlo</a>. Si no nos crees, podes chequearlo por tu cuenta en <a href="https://virustotal.com">VirusTotal</a>, o compilarlo.
        </p>
        <h4>3. Instalar el mod</h4>
        <ol type="1" style="line-height: 1.7rem">
            <li>Ir al sitio de descarga, indicado arriba.</li>
            <li>Bajar hasta el fondo, y descargar el archivo "version.dll".</li>
            <li>Ir a tu carpeta de descargas, y copiar el archivo.</li>
            <li>Ir a donde tenes GTA:SA instalado, y pegar ahi el archivo.</li>
            <li>Abrir SA-MP, y mirar la pestaña Internet. Ya debería funcionar.</li>
        </ol>
        <p>Si queres ver el proceso, acá un video:</p>
        <video style="width: 100%; max-width: 768px" controls>
            <source src="assets/tutorial.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video> 
    </div>

    <div class="innerContent">
        <h3>Creditos</h3>
        <p>Estoy muy agradecido a spmn, el autor de 'SA-MP Masterlist Fix', por tomar el tiempo de re-escribir el mod.</p>
        <p>Ambos nos tornamos a nuestros proyectos cuando nos enteramos que iba a cerrar la Masterlist y estoy feliz con lo que hicimos.</p>
    </div>
</div>

<?php } ?>

<script>
    document.title = "SAMonitor - masterlist mod";
    window.scrollTo(0, 0);
</script>

<?php PageBottom() ?>