<form action="" method="post">
    <h5>Filter</h5>
    <div class="row">
        <div class="col-12">
            <!-- Accordion -->
            <div class="accordion mb-4" id="accordionPanelsStayOpenExample">
                <!-- Price -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                            Price
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body p-3">
                            <div class="input-group">
                                <input type="number" class="form-control" name="min_price" placeholder="Min" min="100" max="20000" aria-label="Min">
                                <span class="input-group-text">-</span>
                                <input type="number" class="form-control" name="max_price" placeholder="Max" min="100" max="30000" aria-label="Max">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Brands -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Brands
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                        <div class="accordion-body p-3">
                            <ul class="list-unstyled mb-0">
                                <div class="d-flex">
                                    <input type="checkbox" name="brands[]" value="AMD" class="me-2" id="amdBrand">
                                    <label for="amdBrand">AMD</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name="brands[]" value="Intel" class="me-2" id="intelBrand">
                                    <label for="intelBrand">Intel</label>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-success w-100" name="filter" type="submit">Filter</button>
    </div>
</form>

<!-- Sorter -->
<div class="d-flex justify-content-between">
    <h3 class="my-auto me-3 me-lg-0">Processor</h3>
    <form action="" method="post" class="d-flex my-auto">
        <button class="btn btn-outline-primary me-2" name="sort" value="ASC" type="submit">Price: Low to High</button>
        <button class="btn btn-outline-primary" name="sort" value="DESC" type="submit">Price: High to Low</button>
    </form>
</div>


<?php
if (isset($_POST['filter'])) {
    $min_price = $_POST['min_price'] ?? 0;
    $max_price = $_POST['max_price'] ?? PHP_INT_MAX;
    $brands = $_POST['brands'] ?? [];

    $brand_filter = "";
    if (!empty($brands)) {
        $brand_list = implode("','", array_map('mysqli_real_escape_string', $brands));
        $brand_filter = "AND brand IN ('$brand_list')";
    }

    $sql = "SELECT * FROM processor WHERE proc_price BETWEEN $min_price AND $max_price $brand_filter ORDER BY proc_price ASC";
} else if (isset($_POST['sort'])) {
    $sort = $_POST['sort'];
    $sql = "SELECT * FROM processor ORDER BY proc_price $sort";
} else {
    $sql = "SELECT * FROM processor ORDER BY proc_price ASC";
}

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="col-11 col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm" style="width: 13rem;">
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <img class="img-fluid p-3" width="180" src="../images/processor/<?php echo $row['proc_img']; ?>.png" alt="image">
            </div>
            <div class="px-3 pb-3">
                <p class="m-0">
                    <span class="fs-6 fs-lg-5"><b><?php echo $row['proc_name']; ?></b></span><br>
                    Php <?php echo $row['proc_price']; ?>.00
                </p>
            </div>
        </div>
    </div>
<?php
}
?>
