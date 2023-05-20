
<script>
  (function($){
    "use strict";

    $(document).ready(function(){

        $(document).on('change','#search_by_category',function(e){
            e.preventDefault();
            $('#search_service_list_form').trigger('submit');
        })

        $(document).on('change','#search_by_subcategory',function(e){
            e.preventDefault();
            $('#search_service_list_form').trigger('submit');
        })

        $(document).on('change','#search_by_rating',function(e){
            e.preventDefault();
            $('#search_service_list_form').trigger('submit');
        })

        $(document).on('change','#search_by_sorting',function(e){
            e.preventDefault();
            $('#search_service_list_form').trigger('submit');
        })

    });
})(jQuery);
</script>

<?php /**PATH D:\xampp\htdocs\qixer_bytesed_laravel\@core\resources\views/frontend/pages/services/partials/service-search.blade.php ENDPATH**/ ?>