<?php
  $blog_array= [
      [ // for each blog provide the following
          'title'=>'The best comfort foods',
          'content'=> "There's nothing quite like a comforting meal to soothe the soul. 
                      Whether you're feeling down, celebrating a victory, or simply craving something familiar, comfort foods have a unique ability to make us feel at home.<br> 
                      Here are some of the most beloved comfort foods that never fail to hit the spot:<br>
                      Mac and Cheese:<br>
                      Creamy, cheesy, and oh-so-satisfying, mac and cheese is a classic comfort food that's loved by people of all ages.<br>
                      Soup: <br>
                      A warm bowl of soup is the perfect way to warm up on a chilly day. Whether it's chicken noodle, tomato, or chili, there's a soup for every taste.<br>
                      Pizza: <br>
                      A cheesy, saucy slice of pizza is always a crowd-pleaser. <br><br>
                      What are your favorite comfort foods? Share your thoughts in the comments below!",
          'author'=>'Milo Adams',
          'date'=>'09/12/2024',
      ],
      [
          'title'=>'Top 3 Video Games of 2024',
	      'content'=>'Here are the top 3 video games of 2024:<br>
	                  <b>Astro Bot</b><br>
	                  This game puts you in the body of a robot named Astro and has you explore a variety of planets to rescue Astro\'s lost robot friends. A creative game with amazing graphics! Astro Bot introduces new gameplay ideas and makes hundreds of references and homages to many other video games.<br>
	                  <b>Star Wars Outlaws</b><br>
	                  In this game, you play as Kay Vess, oung scoundrel with a price on her head looking for a big score. This gorgeous game relies on a combination of stealthy sneaking and blaster combat.<br>
	                  <b>Price of Persia The Lost Crown</b><br>
	                  This game is a reboot, but pulls from some of the best side-scrolling video games. You are put in the role of Sargon, an Immortal tasked with rescuing a prince. The controls are very intuitive and responds instantly.<br>',
	      'author'=>'Kayla Saunders',
	      'date'=>'09/12/2024'
      ],
      [
          'title'=>'Best Vacation Spots',
          'content'=>'The best vacation spots are:
                      <ol><li>Rocky Mountains in Colorado</li>
                      <li>Swimming with the Manatees in Florida</li>
                      <li>Volcanos in Hawaii</li></ol>
                      When you go on vacation be sure to take lots of pictues, bring your friends, and enjoy the nice weather.',
          'author'=>'Sarah Ogden',
          'date'=>'09/16/2024'
      ]
  ];

  function display_blogs($blog_array) {
    for($i=0;$i<count($blog_array);$i++) { ?>
      <div class="container border py-3 my-3">
        <h2><?=$blog_array[$i]['title'] ?></h2>
        <p><a href="detail.php?post_id=<?= $i ?>" class="btn btn-info" role="button">Go to blog</a></p>
      </div>
    <?php }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


<body>
  <h1 class="text-center">Blog Index</h1>
  <?php display_blogs($blog_array); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
