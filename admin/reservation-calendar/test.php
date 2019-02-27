<?php include ("../../includes/db.php");?>
<?php
$ar = array(
    array(
        'id' => 999,
        'title' => 'Repeating Event',
        'start' => date('2019-01-05'),
        'allDay' => false,
        'className' => 'info'
    )
    );
?>
<script type="text/javascript">
var ar = <?php echo json_encode($ar) ?>;
// ["apple","orange",1,false,null,true,8];
// access 4th element in array
alert( ar[0].start ); // false
</script>
