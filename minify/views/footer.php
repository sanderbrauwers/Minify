</div>
</div>
    <footer>
        <p class="pull-right"><a href="">Back to top</a></p>
    	<p>Copyright &copy; <?php echo date("Y"); echo ' '. S_NAME ?></p>
    </footer>
</div>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>

<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<?php
    if (isset($this->js)){
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
?>

<script type="text/javascript">
tinyMCE.init({
/*	selector : ".mceEditor",
	toolnar: 'media',
	height: 400,
	plugins: "image",
    image_advtab: true,
	image_list: [
        {title: 'Dog', value: 'mydog.jpg'},
        {title: 'Cat', value: 'mycat.gif'}
    ],
	content_css: "http://localhost/css/my_tiny_styles.css",
	   
});*/

    selector: ".mceEditor",
		height: 400,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media"
});
</script>


</body>
</html>