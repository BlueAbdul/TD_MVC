<h1>Je suis la page blog</h1>

<?php foreach($articles as $key => $article){

 ?>

<article>
<h2><?= $article['titre'] ?></h2>
</article>

<?php } ?>