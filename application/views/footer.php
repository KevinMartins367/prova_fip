
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
  <?php 
	if (isset($js_files)) { 
		foreach ($js_files as $js_file): ?>
		<script src="<?php echo base_url(); ?>assets/js/<?php echo $js_file; ?>"></script>
		<?php endforeach;
	} ?>
</body>
</html>
