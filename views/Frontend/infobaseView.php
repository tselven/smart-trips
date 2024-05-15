<?php include "partials/head.php" ?>
<div class="cont">
    <div class="sidebar">
        <h2>Filter</h2>
        <div class="filter-section">
            <span style="display:flex; justify-content:space-around;align-items:center;">
                <h3>Type of Places</h3>
                <span class="dropdown-icon"><i class="bi bi-caret-down-fill" style="font-size: 25px;"></i></span>
            </span>
            <ul>
                <li><input type="checkbox" id="restaurant" name="restaurant"><label for="restaurant">Restaurant</label></li>
                <li><input type="checkbox" id="cafe" name="cafe"><label for="cafe">Cafe</label></li>
                <li><input type="checkbox" id="park" name="park"><label for="park">Park</label></li>
                <li><input type="checkbox" id="museum" name="museum"><label for="museum">Museum</label></li>
                <li><input type="checkbox" id="museum" name="museum"><label for="museum">Museum</label></li>
            </ul>
        </div>
        <div class="filter-section">
            <h3>Price Range</h3>
            <input type="number" id="minPrice" name="minPrice" placeholder="Min" step="0.01">
            <input type="number" id="maxPrice" name="maxPrice" placeholder="Max" step="0.01">
        </div>
        <div class="filter-section">
            <h3>Distance Range</h3>
            <input type="range" id="distanceRange" name="distanceRange" min="0" max="50" value="25">
            <span id="distanceValue">25 miles</span>
        </div>
        <div class="filter-section">
            <h3>Date and Time</h3>
            <input type="datetime-local" id="dateTime" name="dateTime">
        </div>
        <button class="apply-filter">Apply Filter</button>
    </div>
    <div class="main-content" style="padding:20px">
    <?php
    use Config\Config;
                if(!empty($articles)){
                    foreach($articles as $article){
                        echo '<div class="col-lg-4 col-md-6 col-sm-12">';
                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">'.$article['title'].'</h5>';
                        echo '<p class="card-text">'.$article['content'].'</p>';
                        //echo "<img class='img-fluid' src='".Config::$root_url.'/image/'.$place['Image']."' alt='".$place['Image']."'/>";
                        //echo '<p class="card-text">'.$place[''].'</p>';
                        echo '<p class="card-text">'.$article['author'].'</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
<!--         <div class="tabs-cont">
            <div class="tabs">
                <button class="tab-links" onclick="openTab(event, 'tab1')">Tab 1</button>
                <button class="tab-links" onclick="openTab(event, 'tab2')">Tab 2</button>
                <button class="tab-links" onclick="openTab(event, 'tab3')">Tab 3</button>
            </div>

            <div id="tab1" class="tab-content">
                <h3>Tab 1 Content</h3>
                <p>This is the content of tab 1.</p>
            </div>

            <div id="tab2" class="tab-content">
                <h3>Tab 2 Content</h3>
                <p>This is the content of tab 2.</p>
            </div>

            <div id="tab3" class="tab-content">
                <h3>Tab 3 Content</h3>
                <p>This is the content of tab 3.</p>
            </div>
        </div> -->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterSections = document.querySelectorAll('.filter-section');

        filterSections.forEach(section => {
            const title = section.querySelector('h3');
            title.addEventListener('click', function() {
                section.classList.toggle('active');
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const filterSections = document.querySelectorAll('.filter-section');

        filterSections.forEach(section => {
            const title = section.querySelector('.dropdown-icon');
            title.addEventListener('click', function() {
                section.classList.toggle('active');
            });
        });
    });
</script>