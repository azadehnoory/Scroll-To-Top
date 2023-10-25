<!--===================== Admin Option Page HTML Layout =====================-->
<?php $stt_style = get_option('_stt_button_style') ?>

<h3> تغییر نحوه نمایش دکمه اسکرول به بالا</h3>
<table class="form-table">
    <tbody>
    <tr>
        <th>
            <label>مکان دکمه:</label>
        </th>
        <td>
            <input type="radio" id="position-1" name="position"
                   value="1" <?php echo ($stt_style['position'] == 1) ? "checked" : ''; ?> >
            <label for="position-1">پایین، سمت راست</label>
            <br>
            <input type="radio" id="position-2" name="position"
                   value="2" <?php echo ($stt_style['position'] == 2) ? "checked" : ''; ?>>
            <label for="position-2">پایین، سمت چپ</label>
        </td>
    </tr>
    <tr>
        <th>
            <label>اندازه: </label>
        </th>
        <td>
            <label for="width"> عرض: px</label>
            <input type="text" id="width" name="width" value="<?php echo $stt_style['width'] ?>">
            <br>
            <label for="height">ارتفاع: px</label>
            <input type="text" id="height" name="height" value="<?php echo $stt_style['height'] ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label>رنگ: </label>
        </th>
        <td>
            <input type="text" value="<?php echo $stt_style['background-color'] ?>" class="my-color-field"
                   name="background-color"/>
            <input type="text" value="<?php echo $stt_style['foreground-color'] ?>" class="my-color-field"
                   name="foreground-color"/>
        </td>
    </tr>
    </tbody>
</table>
<input type="submit" name="btn-submit" value="ذخیره تنظیمات">
