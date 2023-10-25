<?php
/*===================== Dynamic Style =====================*/
$stt_style = get_option('_stt_button_style');
if ($stt_style['position'] == 1) {
    $position = ' right: 20px;';
} else {
    $position = 'left: 20px';
}
?>

<style type="text/css">
    html {
        scroll-behavior: smooth;
    }
    #scroll2top {
        width: <?php echo $stt_style['width']; ?>px;
        line-height: <?php echo $stt_style['height']; ?>px;
        overflow: hidden;
        z-index: 999;
        display: none;
        cursor: pointer;
        position: fixed;
        bottom: 10px;
        text-align: center;
        font-size: 15px;
        border-radius: 4px;
        text-decoration: none;
        background: <?php echo $stt_style['background-color']; ?>;
        color: <?php echo $stt_style['foreground-color']; ?>;
    <?php echo  $position?>
    }
</style>
