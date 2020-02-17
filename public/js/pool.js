$(document).ready(function(){
    var $poolGrid = $('.pool').masonry({
        itemSelector: '.col-md-4'
    });
    var $myGrid = $('.dropbox').masonry({
        itemSelector: '.col-md-4'
    });

    $( ".objective" ).draggable({ revert: 'invalid' });
    $( ".objective-source" ).droppable({
        drop: function( event, ui ) {
            $(this).css('height', $(ui.draggable).parent().height());
            var $this = $(this);
            ui.draggable.position({
                my: "center",
                at: "center",
                of: $this,
                using: function(pos) {
                    $(this).animate(pos, 200, "linear");
                }
            });
            // ui.draggable.css('width', '100%');
            $poolGrid.masonry('layout');
            axios.post("/remove-from-list", {
                'objective_id': parseInt(ui.draggable.attr('data-id'))
            }).then(function(response) {
                if (response.data.status == false) {
                    alert(response.data.message)
                }
            });
        }
    });

    $( ".dropzone" ).droppable({
        drop: function( event, ui ) {
            var $this = $(this);
            $(this).css('height', $(ui.draggable).parent().height());
            ui.draggable.position({
                my: "center",
                at: "center",
                of: $this,
                using: function(pos) {
                    $(this).animate(pos, 200, "linear");
                }
            });
            // ui.draggable.css('width', '100%');
            // ui.draggable.css('height', $(this).height());

            $myGrid.masonry('layout');
            axios.post("/add-to-list", {
                'objective_id': ui.draggable.attr('data-id')
            }).then(function(response) {
                if (response.data.status == false) {
                    alert(response.data.message)
                }
            });
        }
    });
});
