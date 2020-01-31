<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    require_once('functions.php');
    echo makePageStart("Newcastle Sports - Products","sports.css");
    echo makeHeader("Newcastle Sports");
    echo makeNavMenu("Menu", array("about.php" => "About", "products.php" => "Products", "extras.php" => "Extras", "order.php" => "Ordering"));
    echo startMain();
    ?>
    <h2>Current products</h2>
    <p>Balls : The ball is often what a sport requires and revolves around.
        A sports ball is typically round, but can also be in the shape of a
        prolate spheroid in the case of an American football or a rugby ball.

        Flying discs: Flying discs are used for various games such as freestyle,
        disc golf and ultimate.</p>

        <p>Goal posts: In many games, goal posts are at each end of the playing field,
        there are two vertical posts (or uprights) supporting a horizontal crossbar.
        In some games, such as football or hockey, the object is to pass the ball or
        puck between the posts below the crossbar, while in others, such as those based
        on rugby, the ball must pass over the crossbar instead.

        Nets: Nets are used for tennis, volleyball, football, basketball, hockey and
        badminton. A different type of net is used for various forms of fishing.</p>
<?php
echo endMain();
echo makeFooter("Copyright 2019");
echo makePageEnd();
