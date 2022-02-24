<html>

<body>
    <h1>Data Types</h1>
    <?php
    /*
    Available Datatype in php:
        Numeric
        String
        Boolean
        Array
        object
        Resource
        NULL
    */

    $intValue    = 100;
    $doubleValue = 55.5;
    $strName     = "Neel";
    $strId       = "Neel456";
    $a           = 9.88;
    $b           = (int) $a;
    ?>

    <h4>$intValue = <?php echo $intValue ?> : <?php var_dump($intValue) ?> </h4>
    <h4>$doubleValue = <?php echo $doubleValue ?> : <?php var_dump($doubleValue) ?> </h4>
    <h4>$strName = <?php echo $strName ?> : <?php var_dump($strName) ?> </h4>
    <h4>$strId = <?php echo $strId ?> : <?php var_dump($strId) ?> </h4>
    <h4>$a = <?php echo $a ?> : <?php var_dump($a) ?> </h4>
    <h4>Type casting of $a = <?php $b ?> : <?php var_dump($b) ?> </h4>

</body>

</html>