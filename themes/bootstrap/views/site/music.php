<link rel="stylesheet" type="text/css" href="/static/dewplayer/styles.css" />
<script type="text/javascript" src="/static/dewplayer/swfobject.js"></script>
<object type="application/x-shockwave-flash" data="/static/dewplayer/dewplayer-playlist.swf" width="240" height="200" id="dewplayer" name="dewplayer">
    <param name="wmode" value="transparent" />
    <param name="movie" value="/static/dewplayer/dewplayer-playlist.swf" />
    <param name="flashvars" value="<?php echo Yii::app()->createUrl('site/playlist')?>" />
</object>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
