<div class="widget widget_archive"><h2 class="widgettitle"><?php _e( 'Archives' ); ?></h2>
  <dl class="tree-accordion">
    <?php
    $currentyear = date("Y");
    $years = range($currentyear, 2017);
    foreach($years as $year) { ?>
        <dt><a href=""><?php echo $year; ?></a></dt>
        <?php
        $archi = wp_get_archives('echo=0&show_post_count=1&type=monthly&year=' . $year);
        $archi = explode('</li>', $archi);
        $links = array();
        foreach($archi as $link) {
            $link = str_replace(array('<li>', "\n", "\t", "\s"), '' , $link);
            if('' != $link)
                $links[] = $link;
            else
                continue;
        }
        $fliplinks = array_reverse($links);
        if(!empty($fliplinks)) {
            echo '<dd>';
            foreach($fliplinks as $link) {
                echo '<span>' . $link . '</span>';
            }
            echo '</dd>';
        } else {
            echo '<dd class="tree-accordion-empty"></dd>';
        }
        ?>
    <?php } ?>
  </dl>
</div>

<style type="text/css">
	.tree-accordion {
    line-height: 1.5;
}
.tree-accordion dt, .tree-accordion dd {}
.tree-accordion dt a {
    display: block;
}
.tree-accordion dd a {}
.tree-accordion dd span {
    display: block;
    font-size: 13px;
    position: relative;
}
.tree-accordion dd span:before {
    background: #DBDFE4;
    content: '';
    height: 1px;
    left: -6px;
    position: absolute;
    top: 9px;
    width: 6px;
}
.tree-accordion dd {
	/*border-bottom: solid 2px #DBDFE4;*/
    margin: 0 18px;
    padding: 0 0 3px 23px;
    position: relative;
}
.tree-accordion dd:before {
    background: #DBDFE4;
    content: '';
    height: 88%;
    left: 17px;
    position: absolute;
    top: 0;
    width: 1px;

}
.besides dl {
	padding-top: 16px;
}
.besides dl dt {
	font-weight: 500;
	line-height: 8px;
}
.besides dl dt a {
    border-bottom: solid 2px transparent;
    color: #193856;
    display: block;
    padding-left: 32px;
    position: relative;
}
.besides dl dt a:before {
    content: '>';
    color: #31D5C7;
    display: inline-block;
    font-family: 'Lato', sans-serif;
    font-size: 22px;
    font-weight: 700;
    left: 13px;
    position: absolute;
    top: 1px;
}
.besides dl dt > a:hover,.besides dl dt > a:focus {    
    color: #31D5C7;
    text-decoration: none;
}
.besides dl dt > a:hover:before,.besides dl dt > a:focus:before {
    color: #193856;
}
.besides dl dd span a {
    color: #193856;
    display: inline-block;
    position: relative;
    text-transform: capitalize;
}
.besides dl dd span a:hover,.besides dl dd span a:focus {
    color: #31D5C7;
    text-decoration: none;
}
</style>
<script type="text/javascript">
	jQuery(document).ready(function(){
    var allPanels = jQuery('.tree-accordion > dd').hide();

    jQuery('.tree-accordion > dt > a').click(function() {
        $target = jQuery(this).parent().next();

        if(!$target.hasClass('active')) {
            allPanels.removeClass('active').slideUp();
            $target.addClass('active').slideDown(100);
        }

        return false;
    });

    jQuery('.tree-accordion-empty').prev().hide();
});
</script>
