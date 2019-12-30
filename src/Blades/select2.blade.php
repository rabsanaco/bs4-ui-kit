<script type="text/javascript">
    $('#{{ $id }}').select2({
        ajax: {
            url: '{{ $url }}',
            dataType: 'json',
            processResults: function (data) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                return {
                    results: data
                };
            }
        }
    });
</script>
