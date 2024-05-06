<?php include "partials/head.php" ?>
<div class="cont">
    <div class="filter-container">
        <h2>Filter Options</h2>
        <div class="filter-item">
            <label for="destination">Destination:</label>
            <input type="text" id="destination" placeholder="Enter destination...">
        </div>
        <div class="filter-item">
            <label for="date">Date:</label>
            <input type="date" id="date">
        </div>
        <div class="filter-item">
            <label for="budget">Budget:</label>
            <input type="number" id="budget" placeholder="Enter budget...">
        </div>
        <button id="apply-filter">Apply Filter</button>
    </div>
</div>

<?php include "partials/footer.php" ?>