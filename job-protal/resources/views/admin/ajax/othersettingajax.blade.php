<script type="text/javascript">
//     Details_page_model start
    $('#pageModal').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var name = button.data('name');
        var slug = button.data('slug');
        var layout = button.data('layout');
        var description = button.data('description');
        var image = button.data('image');
        var activation = button.data('activation');
        var metaname = button.data('metaname');
        var metakeyword = button.data('metakeyword');
        var metadescription = button.data('metadescription');
        var modal = $(this);
        modal.find('.modal-title').text(name+' Details..');
        modal.find('.modal-body #name').text(name);
        modal.find('.modal-body #slug').text(slug);
        modal.find('.modal-body #layout').text(layout);
        modal.find('.modal-body #description').html(description);
        modal.find('.modal-body #image').attr('src', image);
        modal.find('.modal-body #activation').text(activation);
        modal.find('.modal-body #metaname').text(metaname);
        modal.find('.modal-body #metakeyword').text(metakeyword);
        modal.find('.modal-body #metadescription').text(metadescription);
    });
//    Details Page Model End



    {{--$(document).on('click', '#basicSetting', function(){--}}
        {{--var formData = $("#basic_form_data").serialize();--}}
        {{--$.ajax({--}}
            {{--url: '{!! URL::route("basic-setting-add") !!}',--}}
            {{--cache: false,--}}
            {{--type: "POST",--}}
            {{--data: formData,--}}

            {{--success: function(data) {--}}
{{--//                $.alert({--}}
{{--//                    title: 'SUCCESS !',--}}
{{--//                    content:'Data uploaded Successfully',--}}
{{--//                    type: 'green',--}}
{{--//                    typeAnimated: true--}}
{{--//                });--}}
            {{--},--}}
            {{--error: function (request, status, error) {--}}
                {{--json = $.parseJSON(request.responseText);--}}
                {{--$.each(json.errors, function(key, value){--}}
                    {{--$.alert({--}}
                        {{--title: 'Encountered an error!',--}}
                        {{--content:value,--}}
                        {{--type: 'red',--}}
                        {{--typeAnimated: true,--}}
                    {{--});--}}
                {{--});--}}

            {{--}--}}
        {{--})--}}
    {{--});--}}
</script>