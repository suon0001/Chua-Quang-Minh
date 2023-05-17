<?php

$adminId = (int)$_SESSION["adminID"];
?>
<style>
    <?php include 'styles/index.css'; ?>
</style>


<div class="view-account">
    <section class="module">
        <div class="module-inner">
            <div class="side-bar">
                <nav class="side-menu">
                    <ul class="nav">
                        <li><a href="/admin-profile"><span class="fa fa-user"></span> Profile</a></li>
                        <li><a href="/admin-event"><span class="fa-solid fa-calendar-days"></span> Events</a></li>
                        <li><a href="/admin-mail"><span class="fa fa-envelope"></span> Messages</a></li>
                        <li><a href="/admin-article"><span class="fa-solid fa-newspaper"></span> Articles</a></li>
                        <li><a href="/admin-photo"><span class="fa-solid fa-photo-film"></span> Photos</a></li>
                        <!--          <li><a href="/admin-donation"><span class="fa-solid fa-hand-holding-dollar"></span> Donation</a></li>
                                     <li><a href="/admin-setting"><span class="fa fa-cog"></span> Settings</a></li>-->
                        <li><a href="/logout"><span class="fa-solid fa-right-from-bracket"></span> Logout</a></li>
                    </ul>
                </nav>
            </div>
            <div class="content-panel">
