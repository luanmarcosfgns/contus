<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Contus';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake','snarl']) ?>
     <?= $this->Html->script(['jquery.min','onLoad','onClick','setrequest','onKeyUp','snarl','link','pesquisa','mudalabel']) ?>
    <?=$this->fetch('script') ?> 
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <script data-ad-client="ca-pub-3620011549108197" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
</head>
<body>
     <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Contus</span></a>	
        </div>
        <div class="top-nav-links" style="display: <?= strripos($_SERVER["REQUEST_URI"],'index' )==false?'none':'inline-block'?>" >
            <input type="text" class="input-search no-visible" alt="tabela" placeholder="Buscar nesta lista" />
        </div>
        </div>
        <div class="top-nav-links">
          
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
    
       
 <script>
     $(window).on("load",function(){
     $(".loader-wrapper").fadeOut("slow");
});
 </script>
</body>
</html>
