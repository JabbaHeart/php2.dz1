<html>
<body>
<h1>Новости</h1>

<?php
    foreach ($records as $record) {?>
<h2><a href="<?php echo $record->getLink(); ?>"><?php echo $record->getHeader() ?> </a></h2>
        <hr>
<?php ;} ?>

</body>
</html>
