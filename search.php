<?php 
    include 'classes/functions.php';
    include 'includes/header.php';
    include 'includes/sidebar.php';
?>


        <div class="col-md-9">
            <h3 class="h3">Search Results</h3>
            <?php techSearch(); ?>
        </div>

        <div class="">
            <nav>
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                
                </ul>
            </nav>
        </div>
    
    </div> <!--Search Section end-->



<?php include 'includes/footer.php'; ?>