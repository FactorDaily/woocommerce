<?php 
if(isset($_POST['type']) && $_POST['type'] == 'mobile'){
header('location:whatsapp://send?phone=919980968886&text=Hi,%20'.$_POST['text'].'%20here.%20Please%20send%20me%20alerts%20on%20this%20number');

}else{
header('location:https://web.whatsapp.com/send?phone=919980968886&text=Hi,%20'.$_POST['text'].'%20here.%20Please%20send%20me%20alerts%20on%20this%20number.');
}

?>