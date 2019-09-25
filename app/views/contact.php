<!DOCTYPE html>
<html lang="en">
<?php require_once('./app/views/template/head.php'); ?>
<!-- [body] -->
    <body>
        <div class="root-container">
<?php require_once './app/views/template/nav.php'?>
            <nav class="nav-panel">
                <a href="contact">
                    <div class="panel">
                        <span>contact me</span>
                    </div>
                </a>
                <a href="./public/docs/resume_2019.pdf"> 
                    <div class="panel">
                        <span>/resume</span>
                    </div>
                </a>
                <a href="mailto:waderentz@gmail.com">
                    <div class="panel">
                        <span>/email</span>
                    </div>
                </a>
                <a href="https://github.com/wrpd">
                    <div class="panel">
                        <span>/github</span>
                    </div>
                </a>
            </nav>
<?php require_once('./app/views/template/footer.php'); ?>   
        </div>
    </body>
<!-- [body] -->
</html>