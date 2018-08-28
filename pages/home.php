<h1> Bienvenue sur mon blog </h1>
<div class="row">
  <div class="col-sm-8">
    <?php foreach(App::getTable('Post')->last() as $posts): ?>
    <h1><a href="<?= $post->url; ?>"><?= $posts->title; ?></a></h1>
    <em><?= $posts->categorie; ?></em>
    <p><?= $posts->content?></p>
    <?php endforeach; ?>
  </div>
  <div class="col-sm-4"></div>
</div>
