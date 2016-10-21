<script src="{{ asset('assets/js/jq.js') }}"></script>
<script src="{{ asset('assets/js/jq-ui.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/scrolling-nav.js') }}"></script>
<script src="{{ asset('assets/js/bootbox.min.js') }}"></script>


<script>
	var loader = {
	    html: '<div class="loader-wrap"><i class="fa fa-loader fa-spinner fa-spin"></i></div>',
	    loadinghtml: '<div class="loader-wrap"><div class="loading-wrap"><div class="loading-bar"></div></div><div class="loading-caption"></div></div>',
	    show: function() {
	        $('body').append(this.html);
	        setTimeout(
	            function() {
	                $('.loader-wrap').addClass('in');
	            }, 
	            100
	        );
	    },
	    hide: function() {
	        $('.loader-wrap').removeClass('in');
	        setTimeout(
	            function() {
	                $('.loader-wrap').remove();
	            }, 
	            600
	        );
	    },
	};
</script>
<script>
	$(function() {
		$('.stat-panel').each(function() {
			$(this).on('click', function(e) {
	            e.preventDefault();
	            loader.show();
	            var url = $(this).attr('data-url');
	            $.get({ url: url }).done(function(r) {
	                r = $.parseJSON(r);
	                bootbox.dialog({
	                	title: r.title,
	                    message: r.view,
	                });
	                loader.hide();
	            });

	        });
		});
	});
</script>



