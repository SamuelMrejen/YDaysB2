<?php require_once ('Views/layoutAdministrateur.php');?>
<body>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">


<div class="row">
    <?php foreach ($selectGlasses as $item) { ?>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="index.php?p=updateGlasses&id=<?php echo $item['id']?>"><?php echo $item['name']?></a>
                    </h4>
                    <h5><?php echo $item['price']?> €</h5>
                    <p class="card-text"><?php echo $item['marque']?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
                <div class="delete">
                    <a href="index.php?p=deleteGlasses&id=<?= $item['id'] ?>">Supprimer</a>

                </div>
            </div>
        </div>

    <?php }?>

</div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="Views/vendor/jquery/jquery.min.js"></script>
<script src="Views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
