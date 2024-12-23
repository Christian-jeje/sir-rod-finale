<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: signin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 2: Trigonometry</title>
    <link rel="icon" href="logo.jpg" type="image/jpg">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0b0f24;
            color: #fff;
        }

        header, footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #1a1f38;
        }

        header nav a, footer a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }

        header nav a:hover, footer a:hover {
            color: #00d4ff;
        }

        .pdf-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px 0;
            position: relative;
            height: 600px;
            overflow-y: auto;
            margin-right: 100px;
        }

        #pdfViewer {
            width: 80%;
            margin-top: auto;
            background-color: #fff;
            border: 1px solid #00d4ff;
        }

        .full-size-btn {
            padding: 10px 20px;
            background-color: #0b0f24;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1.2em;
            margin-top: 20px;
            margin: auto;
            display: block;
        }
        .hero {
            text-align: center;
            padding: 50px 20px;
            background: url('hero-image-placeholder.jpg') center/cover no-repeat;
        }

        .hero h1 {
            font-size: 2.5em;
            color: #00d4ff;
        }

        .hero p {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div>APEX - A Student Learning Hub</div>
        <nav>
            <a href="../interface.php">Home</a>
            <a href="../myclasses.php" style="color: #00d4ff;">My Classes</a>
            <a href="../backup/chatbot.php">Ask AI</a>
            <a href="../logout.php">Sign out</a>
        </nav>
    </header>
    <section class="hero">
        <h1>OER Math 1060 – Trigonometry</h1>
        <p>A field focused on solving equations and understanding variable relationships.</p>
        <p>Go down to view the pdf in full size.</p>
    </section>

    <!-- PDF Viewer Section -->
    <div class="pdf-container" id="pdf-container">
        <div id="pdfViewer"></div> <!-- We will add pages here dynamically -->
    </div>
    <button class="full-size-btn" onclick="toggleFullScreen()">View Full Screen</button>

    <!-- Footer -->
    <footer>
        <a href="myclasses.php">Go back</a>
        <a href="about2.html">Developers</a>
    </footer>

    <!-- Load PDF.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>

    <script>
        const pdfUrl = 'classes/trigo.pdf';  // Path to the certificate PDF file
        const pdfViewer = document.getElementById('pdfViewer');
        let pdfDoc = null;

        function toggleFullScreen() {
            const pdfContainer = document.getElementById('pdf-container');
            if (pdfContainer.requestFullscreen) {
                pdfContainer.requestFullscreen();
            } else if (pdfContainer.mozRequestFullScreen) { // Firefox
                pdfContainer.mozRequestFullScreen();
            } else if (pdfContainer.webkitRequestFullscreen) { // Chrome and Safari
                pdfContainer.webkitRequestFullscreen();
            } else if (pdfContainer.msRequestFullscreen) { // IE/Edge
                pdfContainer.msRequestFullscreen();
            }
        }

        // Exit full-screen mode on ESC key press
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.mozCancelFullScreen) { // Firefox
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) { // Chrome and Safari
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) { // IE/Edge
                    document.msExitFullscreen();
                }
            }
        });
        pdfjsLib.getDocument(pdfUrl).promise.then(doc => {
            pdfDoc = doc;
            const scale = 1.8;
            const renderPage = (pageNum) => {
                pdfDoc.getPage(pageNum).then(page => {
                    const viewport = page.getViewport({ scale });
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;
                    page.render({
                        canvasContext: context,
                        viewport: viewport
                    });
                    pdfViewer.appendChild(canvas);  // Add the rendered canvas to the viewer
                });
            };
            for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {
                renderPage(pageNum);
            }
    const pdfContainer = document.getElementById('pdf-container');
    pdfContainer.addEventListener('scroll', () => {
        const scrollPosition = pdfContainer.scrollTop + pdfContainer.clientHeight;
        const totalHeight = pdfContainer.scrollHeight;
        if (scrollPosition >= totalHeight) {
            downloadCertificate(); 
        }
    });
});
        function downloadCertificate() {
            const link = document.createElement('a');
            link.href = pdfUrl;
            link.download = 'certificate.pdf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
</body>
</html>